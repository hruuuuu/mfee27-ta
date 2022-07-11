<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    .hide {
      display: none;
    }
  </style>
</head>

<body>
  <form action="do-add.php" method="post">
    <table>
      <tbody id="tb">
        <tr>
          <th>名稱</th>
          <th>數量</th>
        </tr>
      </tbody>
      <span>最多新增10項食材</span>
    </table>
    <button type="button" id="add">add</button>
    <button type="button" id="del">del</button>
    <button type="submit">送出</button>
  </form>
  <script>
    let rows = 10;
    let index = 1;
    let addEl = document.querySelector("#add");
    let delEl = document.querySelector("#del");
    let tbEl = document.querySelector("#tb");
    const initialLayout = () => {
      for (let i = 1; i <= rows; i++) {
        let row = `
        <tr id="row${i}">
          <td><input type="text" name="food[]"></td>
          <td><input type="number" name="quantity[]"></td>
        </tr>`
        tbEl.innerHTML += row;
        if (i > 1) {
          document.querySelector(`#row${i}`).classList = 'hide';
        }
      }
    }
    initialLayout();
    addEl.addEventListener('click', () => {
      index++;
      document.querySelector(`#row${index}`).classList = '';
      console.log(index);
    })
    del.addEventListener('click', () => {
      const rowEl = document.querySelector(`#row${index}`);
      rowEl.classList = 'hide';
      rowEl.querySelectorAll("input").forEach((item) => {
        item.value = '';
      })
      index--;
      console.log(index);
    })
  </script>
</body>


</html>