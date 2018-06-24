
    var numMin = 0;  
    var numMax = 30;  
        function add(){  
            var num = document.getElementById("number").value;       
            if(num==numMax || num > numMax){  
                document.getElementById("number").value ;  
            }else{  
                document.getElementById("number").value++;  
            }  
        }  
          
        function minus(){  
            var num = document.getElementById("number").value;  
            if(num==numMin || num < numMin){  
                document.getElementById("number").value;  
            }else{  
                document.getElementById("number").value--;  
            }  
        }  
          
        function check(){  
            var num = document.getElementById("number");  
            if (isNaN(num.value)){  
               alert("");
                num.value="";  
            }  
        }