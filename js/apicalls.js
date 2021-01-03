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
        //$(".product-sec1").empty();
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
                    result = result.slice(0);
                    result.sort(function(a,b) {
                        return b.score - a.score;
                    });
                    console.log(result);

                }
                
                var lengte = Math.min(result.length,9);
                //full list of products shop
                for(var i=0;i<lengte;i++)
                {
                    if(lengte>i)
                    {
                        $(".col-md-4,.product-men").eq(i).show(); //show all products
                        $("p#no-products").empty();
                        var name = result[i].name;
                        if(name.length>=20)
                        {
                            name = name.substr(0,20)+"...";
                        }
                        //$("div.product-sec1").append('<div class="col-md-4 product-men"><div class="product-shoe-info shoe"><div class="men-pro-item"><div class="men-thumb-item"><img src="'+result[i].image+'" alt=""><div class="men-cart-pro"><div class="inner-men-cart-pro"><a href="single.php?name='+result[i].name+'" class="link-product-add-cart">Quick View</a></div></div><span class="product-new-top">New</div><div class="item-info-product"><h4>'+name+'<a href="single.php?name='+result[i].name+'"></a></h4><div class="info-product-price"><div class="grid_meta"><div class="product_price"><div class="grid-price "><span class="money ">€'+result[i].salesprice+'</span></div></div><ul class="stars" id="'+result[i].productid+'">');
                        
                        $(".image").eq(i).attr("src",result[i].image);
                        $(".link_single_2").eq(i).html(name);
                        $(".link_single_1").eq(i).attr("href","single.php?name="+result[i].name);
                        $(".link_single_2").eq(i).attr("href","single.php?name="+result[i].name);
                        $(".money").eq(i).html("€"+result[i].salesprice);
                        $(".stars").eq(i).attr("id",result[i].productid);
                        $(".stars#"+result[i].productid).empty();

                        var avgscore = Math.round(result[i].score*2,0)/2;
                        for(var k=0;k<5;k++)
                        {
                           
                            if(avgscore==k+0.5)
                            {
                                $(".stars#"+result[i].productid).append('<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>');

                            }
                            else if(avgscore>k)
                            {
                                $(".stars#"+result[i].productid).append('<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>');

                            }
                            else {
                                $(".stars#"+result[i].productid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');

                            }
                        }
    
                        $(".shoe_item").eq(i).val(result[i].name);
                        $(".amount").eq(i).val(result[i].salesprice);
                        
                    }
                   
                    
                }
                var amountOfdis = 9- lengte;
                if(amountOfdis>0)
                {
                    var startindex = 9-amountOfdis;
                    
                    for(var i=startindex;i<9;i++)
                    {
                        console.log(i);
                        $(".col-md-4,.product-men").eq(i).hide();

                    }
                }
                
                    
                    
                
                
            }
            else
            {
                $(".col-md-4,.product-men").hide();
                $("p#no-products").html("<p id='no-products'>Geen producten gevonden.</p>");
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
        $("form.searchshop").append('<div class="left-side"><h3 class="agileits-sear-head">Category</h3><select class="shopcatoptions" name="category"><option  value=""  selected>Select your option</option>')
       var all=Array();
       for(var i=0;i<result.length;i++)
       {
            all[i]=result[i].category;
       }
       let uniqcat = [...new Set(all)];
       for(var i=0;i<uniqcat.length;i++)
       {
            
            $(".shopcatoptions").append('<option value="'+uniqcat[i]+'">'+uniqcat[i]+'</option>');
        
       }
       $("form.searchshop").append("</select></div>");
       $("form.searchshop").append('<div class="left-side"><h3 class="agileits-sear-head">Material</h3><select  class="shopmatoptions" name="material"><option value=""  selected>Select your option</option>');
       var all=Array();
       for(var i=0;i<result.length;i++)
       {
            all[i]=result[i].material;
       }
       let uniqmat = [...new Set(all)];
    
       for(var i=0;i<uniqmat.length;i++)
       {
            
            $(".shopmatoptions").append('<option value="'+uniqmat[i]+'">'+uniqmat[i]+'</option>');
        
       }
       $("form.searchshop").append("</select></div>");
       $("form.searchshop").append('<div class="left-side"><h3 class="agileits-sear-head">Size</h3><select  class="shopsizeoptions" name="size"><option value=""  selected>Select your option</option>');
       var all=Array();
       for(var i=0;i<result.length;i++)
       {
            all[i]=result[i].size;
       }
       let uniqsize = [...new Set(all)];
       uniqsize.sort((a,b) => a-b);
       for(var i=0;i<uniqsize.length;i++)
       {
            
            $(".shopsizeoptions").append('<option value="'+uniqsize[i]+'">'+uniqsize[i]+'</option>');
        
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
                //var number =Math.floor(Math.random() * 300)
                //special deals
                
                $(".special_deals_image").eq(i).attr("src",result[i].image);
                $(".special_deals_product_name").eq(i).html(result[i].name);
                $(".special_deals_link_single").eq(i).attr("href","single.php?name="+result[i].name);
                $(".special_deals_link_single").eq(i).html("€"+result[i].salesprice);

            }
            
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
                    $(".image").eq(i).attr("src",result[i].image);
                    $(".link_single_2").eq(i).html(name);
                    $(".link_single_1").eq(i).attr("href","single.php?name="+result[i].name);
                    $(".link_single_2").eq(i).attr("href","single.php?name="+result[i].name);
                    $(".money").eq(i).html("€"+result[i].salesprice);
                    $(".stars").eq(i).attr("id",result[i].productid);

                    //$("div.product-sec1").append('<div class="col-md-4 product-men"><div class="product-shoe-info shoe"><div class="men-pro-item"><div class="men-thumb-item"><img src="'+result[i].image+'" alt=""><div class="men-cart-pro"><div class="inner-men-cart-pro"><a href="single.php?name='+result[i].name+'" class="link-product-add-cart">Quick View</a></div></div><span class="product-new-top">New</div><div class="item-info-product"><h4>'+name+'<a href="single.php?name='+result[i].name+'"></a></h4><div class="info-product-price" id="cart-'+result[i].productid+'"><div class="grid_meta"><div class="product_price"><div class="grid-price "><span class="money ">€'+result[i].salesprice+'</span></div></div><ul class="stars" id="'+result[i].productid+'">');
                    var avgscore = Math.round(result[i].score*2,0)/2;
                    for(var k=0;k<5;k++)
                    {
                       
                        if(avgscore==k+0.5)
                        {
                            $(".stars#"+result[i].productid).append('<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>');

                        }
                        else if(avgscore>k)
                        {
                            $(".stars#"+result[i].productid).append('<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>');

                        }
                        else {
                            $(".stars#"+result[i].productid).append('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>');

                        }
                    }                           

                    $(".shoe_item").eq(i).val(result[i].name);
                    $(".amount").eq(i).val(result[i].salesprice);
                    
                }
                
            }
        })
        .fail(function(error) {
            console.log(error);
            
        });
        
    
    });
     
    
    //Register.php api call
    function clear(){
        document.getElementById("email").value = "";
        document.getElementById("pass1").value = "";
        document.getElementById("pass2").value = "";
    }
    
    $('#registerform').submit(function(event) {
        
        
        event.preventDefault();
        
        var email = $(this).serializeArray()[0].value;

        var password = $(this).serializeArray()[1].value;

        var pass2 = $(this).serializeArray()[2].value;
        
        if(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(password) && password == pass2 && /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(email)){
        
            $.get("http://localhost:15743/api/accounts/")
            .done(function(result) {
                var flag = false;
                for(var i in result){
                    if(result[i].email == email){
                        flag = true;
                    }
                    }
                if(flag){
                    document.getElementById("error").style.color = "red";
                    document.getElementById("error").innerHTML = "Email is already in use!";
                    
                }
                else{
                    document.getElementById("error").style.color = "green";
                    document.getElementById("error").innerHTML = "Successfully registered!";
                    var id =1;
                    $.get("http://localhost:15743/api/accounts")
                    .done(function(result) {
                        for(var i in result)
                        {
                            id++;
                            
                        }
    
                $.ajax({
                url: "http://localhost:15743/api/accounts",
                method: "POST",
                data: "{\"accountid\":\""+id+"\",\"email\":\""+email+"\",\"password\":\""+password+"\"}",  
                contentType: "application/json-patch+json"
                    }).done(function () {
                        
                    })
                    .fail(function(error) {
                        console.log(error);
                        
                    });
                })
                    
                    clear();
                 
            }
        })
            .fail(function(error){
                console.log(error)
            });
        }
            else if(!(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(password)) && password== pass2){
                document.getElementById("error").style.color = "red";
                document.getElementById("error").innerHTML = "Password must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters!"
                
            }
            else if(password != pass2){
                document.getElementById("error").style.color = "red";
                document.getElementById("error").innerHTML = "Passwords do not match!"
            }
        
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

