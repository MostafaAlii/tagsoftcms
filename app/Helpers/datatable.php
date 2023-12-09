<?php
//////////// datatable lang ar  Helper Function /////
if (! function_exists('datatable_lang')) {
	function datatable_lang(){
		return [
                "sProcessing" => trans('datatable.sProcessing'),
                "sLengthMenu" => trans('datatable.sLengthMenu'),
                "sZeroRecords" => trans('datatable.sZeroRecords'),
                "sEmptyTable" => trans('datatable.sEmptyTable'),
                "sInfo" => trans('datatable.sInfo'),
                "sInfoEmpty" => trans('datatable.sInfoEmpty'),
                "sInfoFiltered" => trans('datatable.sInfoFiltered'),
                "sInfoPostFix" => trans('datatable.sInfoPostFix'),
                "sSearch" => trans('datatable.sSearch'),
                "sUrl" => trans('datatable.sUrl'),
                "sInfoThousands" => trans('datatable.sInfoThousands'),
                "sLoadingRecords" =>trans('datatable.sLoadingRecords'),
                "oPaginate" => [
                    "sFirst" => trans('datatable.sFirst'),
                    "sLast" => trans('datatable.sLast'),
                    "sNext" => trans('datatable.sNext'),
                    "sPrevious" => trans('datatable.sPrevious'),
                ],
                "oAria" => [
                    "sSortAscending" => trans('datatable.sSortAscending'),
                    "sSortDescending" => trans('datatable.sSortDescending'),
                ],
		];
	}
}
//////////// datatable lang ar  Helper Function /////