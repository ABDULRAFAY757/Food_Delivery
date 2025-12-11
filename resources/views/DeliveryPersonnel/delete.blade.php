<!DOCTYPE html>
<html>
<head>
    <title>Delete a Delivery Personnel</title>
    <style>
        form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 50px auto;
  max-width: 600px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
}

h2 {
  font-size: 2.0rem;
  margin-bottom: 20px;
  background-color: lightgreen,
}

label {
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 5px;
}

input,
text {
  padding: 10px;
  border-radius: 5px;
  border: 2px solid #ddd;
  width: 100%;
  margin-bottom: 20px;
  font-size: 1.1rem;
}

button[type="submit"] {
  background-color: #2ecc71;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 1.2rem;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

button[type="submit"]:hover {
  background-color: #27ae60;
}

@media screen and (max-width: 600px) {
  form {
    margin: 30px auto;
    padding: 10px;
  }
  
  h2 {
    font-size: 2rem;
    background-color: lightgreen;
  }
  
  label {
    font-size: 1.1rem;
  }
  
  input,
  text {
    font-size: 1rem;
    padding: 8px;
  }
  
  button[type="submit"] {
    font-size: 1.1rem;
    padding: 8px 16px;
  }
}
    </style>
</head>
<body>
    <h2> Delete a Delivery Personnel</h2>
    <form action="{{ route('DeliveryPersonnel.delete') }}" method="post">
        @csrf
        <label for="personnel_id">Personnel Id: &nbsp;</label>
        <input type="text" id="personnel_id" name="std_personnel_id" placeholder ="01" style="border-radius: 10px;"><br><br>
        <label for="personnel_name">Personnel Name: &nbsp;</label>
        <input type="text" id="personnel_name" name="std_personnel_name" placeholder ="Abdul Rehman" style="border-radius: 10px;"><br><br>
        <label for="personnel_address">Personnel Address: &nbsp;</label>
        <input type="text" id="personnel_address" name="std_personnel_address" placeholder ="Multan" style="border-radius: 10px;"><br><br>
        <label for="personnel_phone">Personnel Phone: &nbsp;</label>
        <input type="text" id="personnel_phone" name="std_personnel_phone" placeholder ="03125432678" style="border-radius: 10px;"><br><br>
        <br><br>
        <input type="submit" name="delete_std_data" value = "Delete" style="border-radius: 10px;"><br><br>
    </form>
</body>
</html>