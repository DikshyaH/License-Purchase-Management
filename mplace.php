<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="swag.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market place</title>
</head>
<body>
    <div class ="main">
        <div class="main--nav">
            <ul class="nav--list">
                <li><a class="nav--a" href="#"></a></li>
                <li><a class="nav--a" href="./mplace.php">Market Place</a></li>
                <li><a class="nav--a" href="./search.php">Licenses</a></li>
                <li>Files</li>
                <li>Account</li>
            </ul>
        </div>
        <div class="mplace--items">
        <div class="master--container">
        <form id="itm1">
            <div class="container">
                <img class="itm--img" src="./bey.jpg"></img>
              <div class="mini--cont">
                Album: <input id="itm1-pd" value="RUN the WORLD girls"><br>
                Ether required: <input id="itm1-eth" value="3"><br>
                Time period: <input id="whenexp1" name="Expiry date" placeholder="yyyymmdd" required><br>
                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">use</button>
              </div>
            </div>
        </form>
        <form id="itm2">
            <div class="container">
                <img class="itm--img" src="./sha.jpg"></img>
              <div class="mini--cont">
                Album: <input id="itm2-pd" value="Hips don't lie"><br>
                Ether required: <input id="itm2-eth" value="4"><br>
                Time period: <input id="whenexp1" name="Expiry date" placeholder="yyyymmdd"><br>
                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">use</button>
              </div>
            </div>
        </form>
        <form id="itm3">
            <div class="container">
                <img class="itm--img" src="./jlo.jpg"></img>
              <div class="mini--cont">
                Album: <input id="itm2-pd" value="On the floor"><br>
                Ether required: <input id="itm3-eth" value="2"><br>
                Time period: <input id="whenexp1" name="Expiry date" placeholder="yyyymmdd"><br>
                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">use</button>
              </div>
            </div>
        </form>
</div>
        </div>
    </div> 
    <form id="mod1"> 
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms & Conditions</h4>
        </div>
        <div class="modal-body">
          <p id="details">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p id="address"></p>
          <p id="expiry"></p>
          <p id="eth"></p>
          <p id="status"></p>
        </div>
        <div class="modal-footer">
            <button id="purchase1" class="btn btn-default" style="display:none;">Purchase License</button>
            <button id="viewmod1" class="btn btn-default" style="display:none;">View License</button>
         <button type="submit" id="btnjust" class="btn btn-default">Agree to create License</button>
        </div>
      </div>
      
    </div>
    <form id="mod2"> 
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms & Conditions</h4>
        </div>
        <div class="modal-body">
          <p id="details">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p id="address"></p>
          <p id="expiry"></p>
          <p id="eth"></p>
          <p id="status"></p>
        </div>
        <div class="modal-footer">
            <button id="purchase1" class="btn btn-default" style="display:none;">Purchase License</button>
            <button id="viewmod2" class="btn btn-default" style="display:none;">View License</button>
         <button type="submit" id="btnjust2" class="btn btn-default">Agree to create License</button>
        </div>
      </div>
      
    </div>
    <form id="mod3"> 
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms & Conditions</h4>
        </div>
        <div class="modal-body">
          <p id="details">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p id="address"></p>
          <p id="expiry"></p>
          <p id="eth"></p>
          <p id="status"></p>
        </div>
        <div class="modal-footer">
            <button id="purchase1" class="btn btn-default" style="display:none;">Purchase License</button>
            <button id="viewmod1" class="btn btn-default" style="display:none;">View License</button>
         <button type="submit" id="btnjust" class="btn btn-default">Agree to create License</button>
        </div>
      </div>
      
    </div>
  </div>
  </form>

  <script src="web3.min.js"></script>
    <script src="contractAbi.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>

web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:7545"));
        var version = web3.version;
        var contractAddress="0x7332202A55A7918046222184cb522BFF19f32BC8";
        
        
        ///////
        const LicenseContract = new web3.eth.Contract(abi, contractAddress);
        console.log(LicenseContract);
        async function f() {

let accounts = await web3.eth.getAccounts();

console.log('accounts :'+accounts); // "done!"
}

var address='';
var exp='';
var expd='';
f();
        $('#btnjust').click( function(){
            event.preventDefault();
            var fromAddress = "0x4F6ef37Ad181e36D569856F0251A22A62fd15874";
            console.log(fromAddress);
            price=$('#itm1-eth').val();
            pname=$('#itm1-pd').val();
            console.log(pname);
            price = web3.utils.toWei(price, 'Ether');
            price = new web3.utils.BN(price);
            // amount = web3.utils.toWei('1','Ether');
            // date = new Date();
            // day=date.getDate().toString();
            // console.log(day);
            // mnth=date.getMonth().toString();
            // console.log("month:" +mnth);
            // yr='2020';
            // dval=yr.concat(mnth,day);
            dval=$('#whenexp1').val();
            console.log("ggagagag ",dval);
            if(dval===0){
              alert("Please input the expiry date");
             
            }
            
            exp = dval;
            expd = dval;
            // console.log(yr);
            console.log(dval);
            
            dval = new web3.utils.BN(dval);
            
            console.log("after BN "+dval);
            


            
        LicenseContract.methods.createLicense(dval,pname,price).send({from: fromAddress,gas : 3000000},
        function(error, result){
            if(error){
                console.log('error: ' + error);
                
                
            }
            else{
                console.log('result: '+ result);
                $('#viewmod1').css("display","inline");
                address=result;

                
               // const event = result.logs[0].args;
               // console.log(event.id.toString());
            }
         });
        });

        $('#viewmod1').click(function(){
            console.log("in the view function :"+exp)
            event.preventDefault();
            price=$('#itm1-eth').val();
            pname=$('#itm1-pd').val();
            var li='Asset : ';
            var d='Expiry date : ';
            var pri='Ether : ';
            var addr='License address : ';
            pname=li.concat(pname);
            exp=d.concat(exp);
            price=pri.concat(price);
            address=addr.concat(address);
            $('#details').html(pname);
            $('#address').html(address);
            $('#expiry').html(exp);
            $('#eth').html(price);
            $('#purchase1').css("display","inline");


        });
        $('#purchase1').click(function(){
            event.preventDefault();
            var toAddress = "0xfBfC7Ec842567d2616bfe831EFFc7cf434A9240f";
            
            let id1;
            id1= 1;
            id1 = new web3.utils.BN(id1);
            price=$('#itm1-eth').val();
            price = web3.utils.toWei(price, 'Ether');
            price = new web3.utils.BN(price);
            LicenseContract.methods.purchaseLicense(id1).send({from: toAddress,value : price},
        function(error, result){
            if(error){
                console.log('error: ' + error);
                console.log(web3.eth.getGasPrice());
                
            }
            else{
              pname=$('#itm1-pd').val();
              console.log("ddsgsgfsg loser "+ pname)
                console.log('result: '+ result);
                var pri = $('#address').html(result);
                prii="Purchased license : ";
                pri=prii.concat(pri);
                $('#status').html("License Purchased!");
                createCookie("address", result, "10");
                createCookie("expiry",expd , "10");
                console.log("exp while creating cookie" + exp);
                createCookie("name", pname, "10");
                
                $.ajax({
   url: 'dbstuff.php',
   success: function (response) {//response is value returned from php (for your example it's "bye bye"
     console.log(response);
   }
});
               // const event = result.logs[0].args;
               // console.log(event.id.toString());
            }
         });

        })
///////////////////////////////
// $('#btnjust1').click( function(){
//             event.preventDefault();
//             var fromAddress = "0xD23109199e7Fc9A65A5A7aac5ED22bC9c1C9246d";
//             console.log(fromAddress);
//             price=$('#itm2-eth').val();
//             pname=$('#itm2-pd').val();
//             console.log(pname);
//             price = web3.utils.toWei(price, 'Ether');
//             price = new web3.utils.BN(price);
//             // amount = web3.utils.toWei('1','Ether');
//             // date = new Date();
//             // day=date.getDate().toString();
//             // console.log(day);
//             // mnth=date.getMonth().toString();
//             // console.log("month:" +mnth);
//             // yr='2020';
//             // dval=yr.concat(mnth,day);
//             dval=$('#whenexp2').val();
//             // exp = dval;
//             // console.log(yr);
//             console.log(dval);
            
//             dval = new web3.utils.BN(dval);
            
//             // console.log("exdd "+exp);
            


            
//         LicenseContract.methods.createLicense(dval,pname,price).send({from: fromAddress,gas : 3000000},
//         function(error, result){
//             if(error){
//                 console.log('error: ' + error);
                
                
//             }
//             else{
//                 console.log('result: '+ result);
//                 $('#viewmod2').css("display","inline");
//                 address=result;

                
//                // const event = result.logs[0].args;
//                // console.log(event.id.toString());
//             }
//          });
//         });

        $('#viewmod2').click(function(){
            console.log("erew :"+exp)
            event.preventDefault();
            price=$('#itm2-eth').val();
            pname=$('#itm2-pd').val();
            var li= 'Asset : ';
            var d='Expiry date : ';
            var pri='Ether : ';
            var addr='License address : ';
            pname=li.concat(pname);
            exp=d.concat(exp)
            price=pri.concat(price);
            address=addr.concat(address);
            $('#details').html(pname);
            $('#address').html(address);
            $('#expiry').html(exp);
            $('#eth').html(price);
            $('#purchase1').css("display","inline");


        });
        $('#purchase2').click(function(){
            event.preventDefault();
            var toAddress = "0x4F6ef37Ad181e36D569856F0251A22A62fd15874";
            
            let id1;
            id1= 1;
            id1 = new web3.utils.BN(id1);
            LicenseContract.methods.purchaseLicense(id1).send({from: toAddress,},
        function(error, result){
            if(error){
                console.log('error: ' + error);
                console.log(web3.eth.getGasPrice());
                
            }
            else{
              pname=$('#itm1-pd').val();
              console.log("ddsgsgfsg loser "+ pname)
                console.log('result: '+ result);
                var pri = $('#address').html(result);
                prii="Purchased license : ";
                pri=prii.concat(pri);
                $('#status').html("License Purchased!");
                createCookie("address", result, "10");
                createCookie("expiry",exp , "10");
                createCookie("name", pname, "10");
                
                $.ajax({
   url: 'dbstuff.php',
   success: function (response) {//response is value returned from php (for your example it's "bye bye"
     console.log(response);
   }
});
               // const event = result.logs[0].args;
               // console.log(event.id.toString());
            }
         });

        })
//////////////////

        function createCookie(name, value, days) {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
  console.log(document.cookie);
}
    </script>

    
</body>

</html>