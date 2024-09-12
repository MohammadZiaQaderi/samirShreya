<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHREYA SAMIR : GET EXCEL FILES FROM QUERY </title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" 
    rel="stylesheet">
    <style>
        h2 {
            position: relative;
            margin-left: 130px;
        }
        .custom-form-container {
            max-width: 1024px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .custom-textarea {
            height: 200px;
            resize: none; /* Prevent resizing */
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            margin: 10px 10px 1px 120px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-label {
            float: left;
        }
    </style>
</head>
<body>

<div class="container pt-5">
   
    <div class="custom-form-container">
    <h2 class="me-5">SHREYA SAMIR : GET EXCEL FILES FROM QUERY </h2>
    <form enctype="multipart/form-data" action={{route('excelquery')}} method="POST">
            @csrf
            <input type="hidden" name="QuerySubmitted" value="true">

            <div class="mb-4">
                <label for="queryTextArea" class="form-label">Enter Your Query:</label>
                <textarea id="queryTextArea" name="queryforexcel" 
                class="form-control custom-textarea" rows="10" cols="90"></textarea>
            </div>

            <button type="submit" class="btn btn-custom">Submit</button>
        </form>
    </div>
<!-- 
    <hr class="my-4"> -->
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
