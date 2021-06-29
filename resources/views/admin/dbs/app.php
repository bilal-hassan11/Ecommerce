
<!-- Container-fluid starts-->
<div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Discount Coupon Details</h5>
                    </div>
                    <form class="coupon-form" method="">
                        <h4>General</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row form-section">
                                    <label  class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                                    <input class="form-control col-md-7"  type="text" required="">
                                
                                    <label  class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                                    <input class="form-control col-md-7"  type="text" required="" >
                                    <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                
                                    <label class="col-xl-3 col-md-4">Start Date</label>
                                    <input class="datepicker-here form-control digits col-md-7" type="text" data-language="en">
                            
                                    <label class="col-xl-3 col-md-4">End Date</label>
                                    <input class="datepicker-here form-control digits col-md-7" type="text" data-language="en">
                                
                                    <label class="col-xl-3 col-md-4">Free Shipping</label>
                                    <div class="checkbox checkbox-primary col-md-7">
                                        <input  type="checkbox" data-original-title="" title="">
                                        <label >Allow Free Shipping</label>
                                    </div>
                                
                                    <label class="col-xl-3 col-md-4">Quantity</label>
                                    <input class="form-control col-md-7" type="number" required="">
                                
                                    <label class="col-xl-3 col-md-4">Discount Type</label>
                                    <select class="custom-select col-md-7" required="">
                                        <option value="">--Select--</option>
                                        <option value="1">Percent</option>
                                        <option value="2">Fixed</option>
                                    </select>
                                
                                    <label class="col-xl-3 col-md-4">Status</label>
                                    <div class="checkbox checkbox-primary col-md-7">
                                        <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="">
                                        <label for="checkbox-primary-2">Enable the Coupon</label>
                                    </div>
                                </div>
                                            
                                <h4>Restriction</h4>
                                <div class="form-group row form-section">
                                    <label class="col-xl-3 col-md-4">Products</label>
                                    <input class="form-control col-md-7" type="text" required="" >
                                    <div class="valid-feedback">Please Provide a Product Name.</div>
                                
                                    <label class="col-xl-3 col-md-4">Category</label>
                                    <select class="custom-select col-md-7" required="">
                                        <option value="">--Select--</option>
                                        <option value="1">Electronics</option>
                                        <option value="2">Clothes</option>
                                        <option value="2">Shoes</option>
                                        <option value="2">Digital</option>
                                    </select>
                                
                                    <label  class="col-xl-3 col-md-4">Minimum Spend</label>
                                    <input class="form-control col-md-7"  type="number" >
                                
                                    <label class="col-xl-3 col-md-4">Maximum Spend</label>
                                    <input class="form-control col-md-7" type="number" >
                                </div>
                                <h4>Usage Limits</h4>

                                <div class="form-group row form-section">
                                    <label  class="col-xl-3 col-md-4">Per Limit</label>
                                    <input class="form-control col-md-7" type="number" >
                                
                                    <label class="col-xl-3 col-md-4">Per Customer</label>
                                    <input class="form-control col-md-7" type="number" >
                                </div>
                                <div class="pull-right form-navigation">
                                    <button type="button" class="previous btn btn-info float:left">Previous</button>
                                    <button type="button" class="next btn btn-info float:right">next</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>        
                    </form>
                </div>
            </div>

            <script>
    $(function(){
    
        var section = $('.coupon-form');

        function navigateTo(index){
            
            $sections.removeclass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $section.length - 1 ;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);         

        }

        function curIndex(){

            return $section.index($section.filter('.current'));
        }

        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex()-1);
        });     

        $('.form-navigation .next').click(function(){
            $('coupon-form').parsley().whenValidate({
                group: "block" + curIndex();
            }).done(function(){
                navigateTo(curIndex()+1);
            });
        });

        $section.each(function(index, section){
            $(section).find(':input').attr('data-parsley-group','block'+index);
        });
    });

</script>