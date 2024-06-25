<?php require_once "DBconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="buyNow.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <label for ="Animals Type">Animals Type</label>
                    <select id ="Animals Type">
                        <option value="Animals Type"> Select Type</option>
                        <option value="Animals Type"> cow</option>
                        <option value="Animals Type"> goat</option>
                        <option value="Animals Type"> sheep</option>
                        <option value="Animals Type"> Camel</option>
                        <option value="Animals Type"> cow's skin</option>
                        <option value="Animals Type"> goat's skin</option>
                        <option value="Animals Type"> sheep's skin</option>
                        <option value="Animals Type"> Camel's skin</option>

                    </select>
                   
                </div>
                <div class="inputBox">
                    <span>Enter Price of that products :</span>
                    <input type="text" placeholder="35000BDT">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <label for ="text">transportation type</label>
                        <select id ="text">
                        <option value="text"> Select Type</option>
                        <option value="text"> truck</option>
                        <option value="text"> By walk</option>
                        <option value="text"> van</option>
                        
                    </div>
                    
                </div>
                <div class="flex">
                    <div class="inputBox">
                    
                    <label for ="Need food at transportation time?">Need food at transportation time?</label>
                    <select id ="Need food at transportation time?">
                    
                     </div>
                </div>
            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <p>OR </p>
                    
                
                <div class="inputBox">
                    <span>mobile banking accepted :</span>
                    <img src="images/banking.jpg" alt="">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>mobile no :</span>
                        <input type="text" placeholder="019183333">
                        <p>PIN :</p>
                        <input type="text" placeholder="****">
                    </div>
            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>