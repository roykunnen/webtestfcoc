$(document).ready(function () {
    //submit form
    $("form.searchshop").submit(function( event ) {
        event.preventDefault();       
        var name="";
        var mat="";
        var cat="";
        var size="";
        var sort ="";
        for(var i=0;i<$(this).serializeArray().length;i++)
        {
            if($(this).serializeArray()[i].name=="search")
            {
                name = $(this).serializeArray()[i].value;
            }
            else if($(this).serializeArray()[i].name=="material")
            {
                mat = $(this).serializeArray()[i].value;

            }
            else if($(this).serializeArray()[i].name=="category")
            {
                cat = $(this).serializeArray()[i].value;

            }
            else if($(this).serializeArray()[i].name=="size")
            {
                size = $(this).serializeArray()[i].value;

            }
            else if($(this).serializeArray()[i].name=="sort")
            {
                sort=$(this).serializeArray()[i].value;
            }
        }
        $(".product-sec1").empty();
        $.get("http://localhost:15743/query?name="+name+"&category="+cat+"&size="+size+"&material="+mat)
        .done(function(result) 
        {
            if(result.length>0)
            {
                if(sort=="Prijs: Laag - Hoog")
                {
                    result = result.sort(compare);
                }
                else if(sort=="Prijs: Hoog - Laag")
                {
                    result = result.sort(comparerev);

                }
                else if(sort=="Best beoordeeld")
                {
                    result = result.sort(comparerev);

                }
                var lengte = Math.min(result.length,9);
            //full list of products shop
               
                for(var i=0;i<lengte;i++)
                {
                    var name = result[i].name;
                    if(name.length>=20)
                    {
                        name = name.substr(0,20)+"...";
                    }
                    $("div.product-sec1").append('<div class="col-md-4 product-men"><div class="product-shoe-info shoe"><div class="men-pro-item"><div class="men-thumb-item"><img src="'+result[i].image+'" alt=""><div class="men-cart-pro"><div class="inner-men-cart-pro"><a href="single.php?name='+result[i].name+'" class="link-product-add-cart">Quick View</a></div></div><span class="product-new-top">New</div><div class="item-info-product"><h4>'+name+'<a href="single.php?name='+result[i].name+'"></a></h4><div class="info-product-price" id="cart-'+result[i].productid+'"><div class="grid_meta"><div class="product_price"><div class="grid-price "><span class="money ">€'+result[i].salesprice+'</span></div></div><ul class="stars" id="'+result[i].productid+'">');
                    $.get("http://localhost:15743//api/reviews/score/"+result[i].productid)
                    .done(function(reviewscore) 
                    {
                        if(reviewscore.length>0)
                        {
                            var amountreviews=reviewscore.length;
                            var sumscore= 0;
                            
                            for(var j=0;j<amountreviews;j++)
                            {
                                sumscore+=reviewscore[j].score;
    
                            }
                            var avgscore = Math.round(sumscore/amountreviews*2,0)/2;
                            

                            for(var k=0;k<5;k++)
                            {
                               
                                if(avgscore==k+0.5)
                                {
                                    $(".stars#"+reviewscore[0].productid).append('<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>');

                                }
                                else if(avgscore>k)
                                {
                                    $(".stars#"+reviewscore[0].productid).append('<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>');

                                }
                                else {
                                    $(".stars#"+reviewscore[0].productid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');

                                }
                            }
                            $("div.info-product-price#cart-"+reviewscore[0].productid).append('</ul></div><div class="shoe single-item single_page_b"><form action="" method="post"><input type="hidden" name="cmd" value="_cart"><input type="hidden" name="add" value="1"><input type="hidden" name="shoe_item" value="'+reviewscore[0].productid+'"><input type="hidden" name="amount" value="15"><input type="hidden" name="currency_code" value="EUR" /><input type="submit" name="submit" value="Add to cart" class="button add"><a href="#" data-toggle="modal" data-target="#myModal1"></a></form></div></div><div class="clearfix"></div></div></div></div></div>');

                    
                        }
                        else {
                            var fullurl = $(this)[0].url;
                            var prodidarr = fullurl.split('\/');
                            var prodid = prodidarr[prodidarr.length-1];
                            for(var k=0;k<5;k++)
                            {
                                $(".stars#"+prodid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');
                                
                            }
                            $("div.info-product-price#cart-"+prodid).append('</ul></div><div class="shoe single-item single_page_b"><form action="" method="post"><input type="hidden" name="cmd" value="_cart"><input type="hidden" name="add" value="1"><input type="hidden" name="shoe_item" value="><input type="hidden" name="amount" value=""><input type="hidden" name="currency_code" value="EUR" /><input type="submit" name="submit" value="Add to cart" class="button add"><a href="#" data-toggle="modal" data-target="#myModal1"></a></form></div></div><div class="clearfix"></div></div></div></div></div>');


                        }
                        


                    })
                    .fail(function(error) {
                        
                        console.log(error);
                        
                    });
                } 

                    
                    
                
                
            }
            else
            {
                $("div.product-sec1").append("Geen producten gevonden.");
            }
            
        })
        .fail(function(error) {
            console.log(error);
            
        });
        
        });
     //select cat/mat/size to search in shop
    $.get("http://localhost:15743/api/products/")
    .done(function(result) 
    {
        $("form.searchshop").append('<div class="left-side"><h3 class="agileits-sear-head">Category</h3><select class="shopcatoptions" name="category"><option  value="" disabled selected>Select your option</option>')
       var all=Array();
       for(var i=0;i<result.length;i++)
       {
            all[i]=result[i].category;
       }
       let uniq = [...new Set(all)];
       for(var i=0;i<uniq.length;i++)
       {
            
            $(".shopcatoptions").append('<option value="'+uniq[i]+'">'+uniq[i]+'</option>');
        
       }
       $("form.searchshop").append("</select></div>");
    })
    .fail(function(error) {
        console.log(error);
        
    });
    $.get("http://localhost:15743/api/products/")
    .done(function(result) 
    {
        $("form.searchshop").append('<div class="left-side"><h3 class="agileits-sear-head">Material</h3><select  class="shopmatoptions" name="material"><option value="" disabled selected>Select your option</option>');
       var all=Array();
       for(var i=0;i<result.length;i++)
       {
            all[i]=result[i].material;
       }
       let uniq = [...new Set(all)];
    
       for(var i=0;i<uniq.length;i++)
       {
            
            $(".shopmatoptions").append('<option value="'+uniq[i]+'">'+uniq[i]+'</option>');
        
       }
       $("form.searchshop").append("</select></div>");
    })
    .fail(function(error) {
        console.log(error);
        
    });
    
    $.get("http://localhost:15743/api/products/")
    .done(function(result) 
    {
        $("form.searchshop").append('<div class="left-side"><h3 class="agileits-sear-head">Size</h3><select class="shopsizeoptions" name="size"><option value="" disabled selected>Select your option</option>');
       var all=Array();
       for(var i=0;i<result.length;i++)
       {
            all[i]=result[i].size;
       }
       let uniq = [...new Set(all)];
       uniq = uniq.sort();
       for(var i=0;i<uniq.length;i++)
       {
            
            $(".shopsizeoptions").append('<option value="'+uniq[i]+'">'+uniq[i]+'</option>');
        
       }
       $("form.searchshop").append("</select></div>");
    })
    .fail(function(error) {
        console.log(error);
        
    });
    //get shop list content
    $.get("http://localhost:15743/api/products")
    .done(function(result) 
    {
        for(var i=0;i<5;i++)
        {
            var number =Math.floor(Math.random() * 300)
            //special deals
            $("h3.agileits-sear-head#specialdeals").append('<div class="special-sec1"><div class="col-xs-4 img-deals"><img src="'+result[number].image+'" alt=""></div><div class="col-xs-8 img-deal1"><h3>'+result[number].name+'</h3><a href="single.php?name="'+result[number].name+'">€'+result[number].salesprice+'</a></div><div class="clearfix"></div></div>');

        }
        //full list of products shop
        if(result.length>0)
        {
            
            var lengte = Math.min(result.length,9);
        //full list of products shop
            
            for(var i=0;i<lengte;i++)
            {
                var name = result[i].name;
                if(name.length>=20)
                {
                    name = name.substr(0,20)+"...";
                }
                $("div.product-sec1").append('<div class="col-md-4 product-men"><div class="product-shoe-info shoe"><div class="men-pro-item"><div class="men-thumb-item"><img src="'+result[i].image+'" alt=""><div class="men-cart-pro"><div class="inner-men-cart-pro"><a href="single.php?name='+result[i].name+'" class="link-product-add-cart">Quick View</a></div></div><span class="product-new-top">New</div><div class="item-info-product"><h4>'+name+'<a href="single.php?name='+result[i].name+'"></a></h4><div class="info-product-price" id="cart-'+result[i].productid+'"><div class="grid_meta"><div class="product_price"><div class="grid-price "><span class="money ">€'+result[i].salesprice+'</span></div></div><ul class="stars" id="'+result[i].productid+'">');
                $.get("http://localhost:15743//api/reviews/score/"+result[i].productid)
                .done(function(reviewscore) 
                {
                    if(reviewscore.length>0)
                    {
                        var amountreviews=reviewscore.length;
                        var sumscore= 0;
                        
                        for(var j=0;j<amountreviews;j++)
                        {
                            sumscore+=reviewscore[j].score;

                        }
                        var avgscore = Math.round(sumscore/amountreviews*2,0)/2;
                        

                        for(var k=0;k<5;k++)
                        {
                            
                            if(avgscore==k+0.5)
                            {
                                $(".stars#"+reviewscore[0].productid).append('<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>');

                            }
                            else if(avgscore>k)
                            {
                                $(".stars#"+reviewscore[0].productid).append('<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>');

                            }
                            else {
                                $(".stars#"+reviewscore[0].productid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');

                            }
                        }
                        $("div.info-product-price#cart-"+reviewscore[0].productid).append('</ul></div><div class="shoe single-item single_page_b"><form action="" method="post"><input type="hidden" name="cmd" value="_cart"><input type="hidden" name="add" value="1"><input type="hidden" name="shoe_item" value="'+reviewscore[0].productid+'"><input type="hidden" name="amount" value="15"><input type="hidden" name="currency_code" value="EUR" /><input type="submit" name="submit" value="Add to cart" class="button add"><a href="#" data-toggle="modal" data-target="#myModal1"></a></form></div></div><div class="clearfix"></div></div></div></div></div>');

                
                    }
                    else {
                        var fullurl = $(this)[0].url;
                        var prodidarr = fullurl.split('\/');
                        var prodid = prodidarr[prodidarr.length-1];
                        for(var k=0;k<5;k++)
                        {
                            $(".stars#"+prodid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');
                            
                        }
                        $("div.info-product-price#cart-"+prodid).append('</ul></div><div class="shoe single-item single_page_b"><form action="" method="post"><input type="hidden" name="cmd" value="_cart"><input type="hidden" name="add" value="1"><input type="hidden" name="shoe_item" value="><input type="hidden" name="amount" value=""><input type="hidden" name="currency_code" value="EUR" /><input type="submit" name="submit" value="Add to cart" class="button add"><a href="#" data-toggle="modal" data-target="#myModal1"></a></form></div></div><div class="clearfix"></div></div></div></div></div>');


                    }
                    


                })
                .fail(function(error) {
                    
                    console.log(error);
                    
                });
            }
        }
    })
    .fail(function(error) {
        console.log(error);
    });
     
        
        
    //Register.php api call
    
    
    $('form.login100-form').submit(function(event) {
        event.preventDefault();
        
        var accountid = makeid(8);

        var email = $(this).serializeArray()[0].value;
        console.log(email);
        var password = $(this).serializeArray()[1].value;
        console.log(password);
    
        $.ajax({
            url: "http://localhost:15743/api/accounts",
            method: "POST",
            data: "{\"accountid\":\""+accountid+"\",\"email\":\""+email+"\",\"password\":\""+password+"\"}",  
            contentType: "application/json-patch+json"
        }).done(function () {
            console.log("Account Posted");
        }).fail(function(error) {
            console.log(error);
        });
    });

});

function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
function compare(a, b) {
    const priceA = a.salesprice;
    const priceB = b.salesprice;
    let comparison = 0;
    if (priceA > priceB) {
        comparison = 1;
    } else if (priceA < priceB) {
        comparison = -1;
    }
    return comparison;
    }
    function comparerev(a, b) {
    const priceA = a.salesprice;
    const priceB = b.salesprice;
    let comparison = 0;
    if (priceA > priceB) {
        comparison = 1;
    } else if (priceA < priceB) {
        comparison = -1;
    }
    return -1*comparison;
    }  
    function comparereviews(a,b)
    {
    const scoreA = a.score;
    const scoreB = b.score;
    let comparison = 0;
    if (scoreB > scoreA) {
        comparison = 1;
    } else if (scoreB < scoreB) {
        comparison = -1;
    }
    return -1*comparison;
    }