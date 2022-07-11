<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="do-upload.php" method="post" enctype="multipart/form-data">
    <input type="file" accept="image/*" name="img" disabled />
    <button type="submit">
      儲存資料
    </button>
    <button type="button" onclick="unlock()">
      修改資料
    </button>
  </form>
  <script>
    const unlock = () => {
      document.querySelector('input').disabled = false;
    };
  </script>
</body>

</html>