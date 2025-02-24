<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Permohonan extends Component
{
    public $filter_permohonan;
    public $filter_daterange;
    public $filters_fo;
    public $filters_atasan;
    public $filters_pencairan;
    public $filters_survey;
    public $filters_lpj;

    public $c_filter_daterange;
    public $c_filters_fo;
    public $c_filters_atasan;
    public $c_filters_pencairan;
    public $c_filters_survey;
    public $c_filters_lpj;

    public function mount()
    {
        if ($this->filter_permohonan == 'on') {
            $this->filter_daterange = $this->c_filter_daterange;
            $this->filters_fo = $this->c_filters_fo;
            $this->filters_atasan = $this->c_filters_atasan;
            $this->filters_pencairan = $this->c_filters_pencairan;
            $this->filters_survey = $this->c_filters_survey;
            $this->filters_lpj = $this->c_filters_lpj;
        } else {
            $currentMonthStartDate = date('Y-m-01');
            $currentMonthEndDate = date('Y-m-t');
            
            $this->filter_daterange = $currentMonthStartDate . '+-+' . $currentMonthEndDate;
            
        }
    }

    public function render()
    {
        $date_range = $this->filter_daterange;
        // dd($date_range);    
        // dd($this->filter_daterange);
        $start_date = null;
        $end_date = null;

        if (strpos($date_range, '+-+') !== false) {
            // Case where the date range is formatted with '+-+'
            $date_parts = explode("+-+", $date_range);
            $start_date = $date_parts[0];
            $end_date = $date_parts[1];
        } else {
            // Case where the date range is formatted with ' - '
            $date_parts = explode(" - ", $date_range);
            $start_date = $date_parts[0];
            $end_date = $date_parts[1];
        }

        $filter_daterange = $start_date . ' - ' . $end_date;

        $data = DB::table('permohonan')->select('permohonan.*')
            ->when($filter_daterange != '', function ($query) use ($start_date, $end_date) {
                // filter bulan dan tahun for pengajuan_detail
                return $query->when($start_date && $end_date, function ($query) use ($start_date, $end_date) {
                    if ($start_date == $end_date) {
                        return $query->whereDate('permohonan_tgl', '=', $start_date);
                    } else {
                        return $query->whereDate('permohonan_tgl', '>=', $start_date)
                            ->whereDate('permohonan_tgl', '<=', $end_date);
                    }
                });
            })
            // filter fo
            ->when($this->filters_fo != 'Semua' && $this->filters_fo != '', function ($query) {
                return $query->where('tujuan', $this->filters_fo);
            })
            ->when($this->filters_atasan != 'Semua' && $this->filters_atasan != '', function ($query) {
                return $query->where('tujuan', $this->filters_atasan);
            })
            ->when($this->filters_survey != 'Semua' && $this->filters_survey != '', function ($query) {
                return $query->where('tujuan', $this->filters_survey);
            })
            ->when($this->filters_pencairan != 'Semua' && $this->filters_pencairan != '', function ($query) {
                return $query->where('tujuan', $this->filters_pencairan);
            })
            ->when($this->filters_lpj != 'Semua' && $this->filters_lpj != '', function ($query) {
                return $query->where('tujuan', $this->filters_lpj);
            })
            ->orderBy('permohonan.created_at', 'desc')
            ->get();


        return view('livewire.permohonan', compact(
            'start_date',
            'end_date',
            'filter_daterange',
            'data'
            ));
    }
    
    public function nama_upz($id)
    {
        $a = DB::table('permohonan')->join('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
        ->where('upz.upz_id', $id)->first();
        return $a->nama;
    }
}
