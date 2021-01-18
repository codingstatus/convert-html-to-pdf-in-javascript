<!DOCTYPE html>
<html>
<head>
<title>HTML with CSS</title>

<style type="text/css">
  #text{
    max-width: 100%;
    width: 35%;
    text-align: center;
    margin: 50px;
    border: 5px solid orange;
    background: whitesmoke;
  }
  #text h2{
    background: orange;
    color: white;
  }
#btn{
      padding:10px;
      border: 0px;
      margin: 50px;
      cursor: pointer;
    }
  </style>
  
    html, body{
      overflow-x: hidden;
    }

</style>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>

<button id="btn">Convert to CSS</button>

<div id="text">
<h2>HTML Page with CSS to PDF</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="custom.js"></script>
</body>
</html>