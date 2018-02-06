{{--Modal Popup Tags--}}
<div class="modal fade" id="tagsModal" tabindex="-1" role="dialog" aria-labelledby="tagsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Select Tags</h4>
            </div>
            <div class="modal-body">
                <div role="tabpanel" class="tagsdesign">
                    <input type="hidden" name="tag_call" id="tag_call" value="" />
                    <!-- Nav tabs -->
                    <div class="tabs-design2">
                        <ul class="nav nav-tabs" role="tablist">
                            @for($i=0; $i < count($tagGroups); $i++)
                                <li role="presentation" @if($i==0) class="active" @endif>
                                    <a href="#{{ $tagGroups[$i]->slug }}" aria-controls="uploadTab" role="tab" data-toggle="tab">{{ $tagGroups[$i]->name }}</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-innner2">
                        <div class="tab-content">
                                @for($h=0; $h < count($tagGroups); $h++)
                                    <div role="tabpanel" class="tab-pane @if($h==0) active @endif" id="{{ $tagGroups[$h]->slug }}">
                                        @for($j=0; $j < count($tagGroups[$h]->tags); $j++)
                                            <div class="col-md-4 col-xs-6">
                                                <input type="checkbox" name="tags" value="{{$tagGroups[$h]->tags[$j]->name}}" class="form-control" id="{{$tagGroups[$h]->tags[$j]->slug}}" />
                                                <label for="{{$tagGroups[$h]->tags[$j]->slug}}">{{$tagGroups[$h]->tags[$j]->name}}</label>
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
                         </div>
                     </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary save" onclick="save_tags()">Save</button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--Modal Popup Tags--}}