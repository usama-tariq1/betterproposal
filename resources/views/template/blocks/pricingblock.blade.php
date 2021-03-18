


        {{-- Pricing-block --}}

        <div class="pricing-block templateblock" tabledata="" block="{{$blockid}}" order="{{$order}}">
            <div class="renderbox view ">




                {{-- <div class="tablerow">
                    <div class="editor">
                        <div class="tooltip-box editor" style="left: 5%;">
                            <div class="tool removerow">
                                <i class="fa fa-trash-alt " ></i>
                            </div>
                            <div class="tool">
                                <i class="fa fa-save" ></i>

                            </div>
                            <div class="tool ">
                                <i class="fa fa-chevron-up"></i>
                            </div>

                            <div class="tool ">
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <i class="fas fa-ellipsis-v editor"></i>
                    </div>
                    <div class="info">
                        <div class="part1">
                            <div class="title tinymce-price">
                                hell
                            </div>
                            <div class="description tinymce-price">
                                hellof
                            </div>
                        </div>
                        <div class="part2">
                            <div class="priceholder">
                                $ <span class="price tinymce-price" > 20</span>
                            </div>
                            <div class="qtyholder">
                                <span class="qty tinymce-price">1</span> @ $ <span class="priceperunit tinymce-price">20</span>
                            </div>
                        </div>
                    </div>
                </div> --}}



            </div>
            <div class="totalholder">
                <div class="totaltitle">
                    Total
                </div>
                <div class="totalval">
                    &euro; <span class="total">0</span>
                </div>
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
                <div class="rowchoice" style="display: none;">
                    <div class="title">
                        Which Product Would you like to add ?
                    </div>

                    <input type="text" name="newproductname" class="form-control newproductname" style="display: none; margin-bottom:20px;" placeholder="Product Name">

                    <select name="productselect " id="" class="productselect form-control">
                        <option value=""> Select Product </option>
                        <option value="-1"> New Product </option>
                        @foreach (App\Product::where('user_id' , Auth::user()->id)->get() as $product )
                            <option value="{{$product->id}}"> {{$product->name}}</option>

                        @endforeach
                    </select>

                    <div class="btngroup">
                        <div class="actionbtn cancel ">Cancel</div>
                        <div class="actionbtn accept">Add Product</div>
                    </div>

                    <div class="dontfind" > Don't find Your Product ? click here.</div>

                </div>
                <div class="actions">
                    <div class="title">
                        What would you like to add?
                    </div>
                    <div class="btngroup">
                        <div class="actionbtn btntitle">Section Title</div>
                        <div class="actionbtn btntable">Line Item</div>
                    </div>
                </div>
            </div>
        </div>
