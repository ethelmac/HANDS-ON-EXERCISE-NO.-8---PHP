<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 3 - Database Integration</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
        }
        table {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        td {
            padding: 8px;
        }
        input[type="text"], 
        input[type="number"], 
        input[type="email"], 
        input[type="tel"], 
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .record-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .record-table th, .record-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .record-table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>