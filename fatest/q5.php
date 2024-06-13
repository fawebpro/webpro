<!DOCTYPE html>
<html>
<head>
    <title>Musical Valley</title>
</head>
<body>
    <form action="" method="post" onsubmit="return validateForm()">
        <h1>Musical Valley</h1>
        <p>Greatest Sound Of All!<br><strong>Please Confirm The Details!</strong></p>
        
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" oninvalid="this.setCustomValidity('Please Insert Your Name')" oninput="this.setCustomValidity('')" required><br><br>
        
        <label for="phone">Phone No :</label>
        <input type="text" id="phone" name="phone" oninvalid="this.setCustomValidity('Please Insert Your Phone No')" oninput="this.setCustomValidity('')" required><br><br>
        
        <label>Options :</label>
        <input type="radio" id="self_delivery" name="options" value="self_delivery" oninvalid="this.setCustomValidity('Please Choose Any Options')" oninput="this.setCustomValidity('')" required> Self-Delivery
        <input type="radio" id="pickup" name="options" value="pickup" oninvalid="this.setCustomValidity('Please Choose Any Options')" oninput="this.setCustomValidity('')" required> Pickup<br><br>
        
        <button type="submit">Purchase</button>
    </form>
    
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var options = document.querySelector('input[name="options"]:checked');

            if (name == "") {
                alert("Please Insert Your Name");
                return false;
            }

            if (phone == "") {
                alert("Please Insert Your Phone No");
                return false;
            }

            if (options == null) {
                alert("Please Choose Any Options");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
