


        {{-- Pricing-block --}}

        <div class="pricing-block templateblock" tabledata="" block="{{$blockid}}" order="{{$order}}">
            <div class="renderbox view ">


            </div>
            <div class="templates editor" style="display:none;" >
                <div class="sectiontitle">
                    <div class="sidetool" >
                        <div class="settingbtn">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="tooltip-box">
                            <div class="tool removetitle">
                                <i class="fa fa-trash-alt" ></i>
                            </div>
                            <div class="tool setting ">
                                <i class="fa fa-cog"></i>
                            </div>

                            <div class="tool">
                                <i class="fa fa-chevron-up "></i>
                            </div>

                            <div class="tool">
                                <i class="fa fa-chevron-down "></i>
                            </div>
                        </div>

                    </div>
                    <div class="title tinymce-heading">
                        Click here to rename this section title
                    </div>
                </div>
                <div class="sectiontable" style="display:none;">
                    <div class="tableholder">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>

                                </tr>
                            </thead>
                            <tbody class="tablebody">

                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="editor">
                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" value="0" min="0" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="btn btn-primary rowinsert">Add</div>
                    </div>
                </div>

            </div>
            <div class="actionholder editor">
                <div class="tooltip-tab">
                    <div class="tool remove">
                        <i class="fa fa-trash-alt" ></i>
                    </div>
                    <div class="tool save">
                        <i class="fa fa-save" ></i>

                    </div>
                    <div class="tool sortup">
                        <i class="fa fa-chevron-up"></i>
                    </div>

                    <div class="tool sortdown">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="tool setting ">
                        <i class="fa fa-cog"></i>
                    </div>
                </div>
                <div class="actions">
                    <div class="title">
                        What would you like to add?
                    </div>
                    <div class="btngroup">
                        <div class="actionbtn btntitle">Title</div>
                        <div class="actionbtn btntable">Table</div>
                    </div>
                </div>
            </div>
        </div>
