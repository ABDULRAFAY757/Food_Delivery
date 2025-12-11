<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>
    /* CSS styles for the contact form */
    body {
      background-image: url("https://media.istockphoto.com/id/1394512384/photo/close-up-of-business-man-working-at-office-with-e-mail-icons-on-virtual-screen-sending-email.jpg?s=612x612&w=0&k=20&c=mG5kzsZktAT24iOTJcjhrQiuXONMlMXMK3nDKw3TGJs=");
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form_body label {
      font-weight: bold;
    }
    .form_body input[type="email"],
    .form_body input[type="text"],
    .form_body textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .form_body textarea {
      resize: vertical;
    }
    .form_body input[type="file"] {
      display: none;
    }
    .form_body .custom-file-upload {
      display: inline-block;
      padding: 6px 12px;
      cursor: pointer;
      background-color: #4CAF50;
      color: #fff;
      border-radius: 4px;
    }
    .form_body .submit {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form_body">
      <form action="{{route('send_mail')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="email">Email To</label><br>
        <input type="email" name="email" id="email" placeholder="iamrafay757@gmail.com" pattern="iamrafay757@gmail.com" required><br><br>
        <label for="cc">CC</label><br>
        <input type="email" name="cc" id="cc" placeholder="Example@email.com"><br><br>
        <label for="bcc">BCC</label><br>
        <input type="email" name="bcc" id="bcc" placeholder="Example@email.com"><br><br>
        <label for="subject">Subject</label><br>
        <input type="text" name="subject" id="subject" placeholder="Subject"><br><br>
        <label for="details">Body</label><br>
        <textarea name="details" id="details" cols="30" rows="5"></textarea><br><br>
        <label for="attachment">Attachments</label><br>
        <input type="file" name="attachment[]" id="attachment" multiple>
        <label class="custom-file-upload" for="attachment">Choose File</label><br><br>
        <input class="submit" type="submit" name="SubmitButton" value="Submit">
      </form> 
    </div>
  </div>
</body>
</html>
