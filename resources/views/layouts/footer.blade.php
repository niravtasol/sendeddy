
<script type="text/javascript" defer="defer">
    $(document).ready(function(){
        $(".mainblock form").find("input").each(function(){
            if($(this).attr("required")=="required")
            {
                if($(this).prev("label").length!=0)
                {
                    $(this).attr("data-bv-notempty-message","{{ __("framework.error_prefix") }} "+$(this).prev("label").html()+"&nbsp;{{ __("framework.error_postfix") }} ");
                }
                else
                {
                    $(this).attr("data-bv-notempty-message","{{ __("framework.error_prefix") }} "+$(this).prev().prev("label").html()+"&nbsp;{{ __("framework.error_postfix") }} ");
                }

                $(this).attr("data-bv-group","."+$(this).parent().attr("class"));
            }

        });
        $(".modal-dialog form").find("input").each(function(){
            if($(this).attr("required")=="required")
            {

                if($(this).prev("label").length!=0)
                {
                    $(this).attr("data-bv-notempty-message","{{ __("framework.error_prefix") }} "+$(this).prev("label").html()+"&nbsp;{{ __("framework.error_postfix") }} ");
                }
                else
                {
                    $(this).attr("data-bv-notempty-message","{{ __("framework.error_prefix") }} "+$(this).prev().prev("label").html()+"&nbsp;{{ __("framework.error_postfix") }} ");
                }
                $(this).attr("data-bv-group","."+$(this).parent().attr("class"));
            }

        });
        $('label').each(function (i, e) {
            var label;
            {{--switch ($(e).attr('id')) {--}}
                {{--case 'country_system_name':--}}
                    {{--label =  '{{ __('country .country_system_name_tooltip') }}';--}}
                    {{--break;--}}
                {{--case 'input-two':--}}
                    {{--label = 'This is input #2';--}}
                    {{--break;--}}
            {{--}--}}
//            var id=$(e).attr('id');
            label =  $(e).attr('tooltip');
            $(e).tooltip({ 'trigger': 'hover', 'title': label });
        });
    });
</script>
<script src="{{ asset('js/bootstrapValidator.js') }}" ></script>

<script type="text/javascript" >


    $(document).ready(function(){
        {{--$.extend( true, $.fn.dataTable.defaults, {--}}
            {{--"language": {--}}
                {{--"url": "/languagefile/{{ Config::get('app.locale') }}/datatables"--}}
            {{--},--}}
            {{--select: {--}}
                {{--style: 'os',--}}
                {{--selector: 'td:first-child'--}}
            {{--},--}}
            {{--processing: true,--}}
            {{--serverSide: true,--}}
            {{--dom: 'B'+ "<'row'<'col-sm-6'l><'col-sm-6'f>>" +--}}
            {{--"<'row'<'col-sm-12'tr>>" +--}}
            {{--"<'row'<'col-sm-5'i><'col-sm-7'p>>",--}}
            {{--buttons: [--}}
                {{--{--}}
                    {{--extend: 'export',--}}
                    {{--text: '<i class="fa fa-external-link" aria-hidden="true"></i>{{ __('framework.export') }} <span class="caret"></span>',--}}
                    {{--className: 'custom-dt-export'--}}
                {{--},--}}
                {{--{--}}
                    {{--extend: 'print',--}}
                    {{--className: 'custom-dt-print'--}}
                {{--}--}}
            {{--]--}}
        {{--} );--}}

        //dt.buttons( 0, null ).container().appendTo('#datatable-buttons');


        $('.innerblock form, #create-forum-category-form').not('#create-thread-form, #edit-thread-form, #data-actions-form, #data-actions-form2').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }});

    });
</script>
<footer>
    <div class="container">
        <div class="copyright-txt">
            Copyright © 2017 SGP The GEF Small Grants Programme
        </div>
    </div>
</footer>