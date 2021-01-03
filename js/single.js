$(document).ready(function () {
    var url = window.location.href;
    var productid = url.split('=');
    //name
    //image
    //
    $.get("http://localhost:15743/"+productid[1])
    .done(function(result) 
    {
        $(".slides").append('<li data-thumb="'+result[0].image+'" style="width: 416.4px; float: left; display: block;" class="clone" aria-hidden="true"><div class="thumb-image"> <img src="'+result[0].image+'" data-imagezoom="true" class="img-responsive" draggable="false"> </div></li><li data-thumb="'+result[0].image+'" style="width: 416.4px; float: left; display: block;" class="flex-active-slide"><div class="thumb-image"> <img src="" data-imagezoom="true" class="img-responsive" draggable="false"> </div></li>');
        $("#name").prepend("<h3 id='product_name'>"+result[0].name+'</h3><p><span class="item_price" id="salesprice">€'+result[0].salesprice+'</span></p> <div class="rating1"><ul class="stars" id="'+result[0].productid+'">');
        var avgscore = Math.round(result[0].score*2,0)/2;
        for(var k=0;k<5;k++)
        { 
            if(avgscore==k+0.5)
            {
                $(".stars#"+result[0].productid).append('<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>');

            }
            else if(avgscore>k)
            {
                $(".stars#"+result[0].productid).append('<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>');

            }
            else {
                $(".stars#"+result[0].productid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');

            }
                   
                   
        }       
        $("div#rating1").append('</ul><br></div>');
        $('<br><h4>Available sizes: '+result[0].size+'</h4>').insertBefore("div.description");
        $("#shoe_item").val(result[0].name);
        $("#amount").val(result[0].salesprice);
        $("div.resp-tabs-container").append('<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h2><div class="tab1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block"><div class="single_page"><h6>'+result[0].name +'</h6><p>'+result[0].description+'</p><p class="para"></p></div></div><h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Reviews</h2><div class="tab2 resp-tab-content" aria-labelledby="tab_item-1"><div class="single_page"><div class="bootstrap-tab-text-grids">');

        
        $.get("http://localhost:15743//api/reviews/score/"+result[0].productid)
        .done(function(result) 
        {
            if(result.length>0)
            {
                for(var i=0;i<result.length;i++)
                {
                    $.get("http://localhost:15743//api/customers/"+result[i].customerid)
                    .done(function(custresult)
                    {
                        $("div.bootstrap-tab-text-grids").append('<div class="bootstrap-tab-text-grid-left"><img src="images/t1.jpg" alt=" " class="img-responsive"></div><div class="bootstrap-tab-text-grid-right"><ul><li><a href="#">'+custresult.lastname+' '+custresult.firstname+'</a></li><li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li></ul><br>');
                    })
                    .fail(function(error) {
            
                        console.log(error);
                        
                    });
                    $("div.bootstrap-tab-text-grid-right").append("<p>"+result[i].text+"</p>");
                    

                    
                }
                
                

               
                

        
            }
            else {
                var fullurl = $(this)[0].url;
                var prodidarr = fullurl.split('\/');
                var prodid = prodidarr[prodidarr.length-1];
                for(var k=0;k<5;k++)
                {
                    $(".stars#"+prodid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');
                    
                }


            }
            $("div#rating1").append('</ul><br></div>');
            


        })
        .fail(function(error) {
            
            console.log(error);
            
        });
        
        
    })
    .fail(function(error) {
        console.log(error);
        
    });
    
});
