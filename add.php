<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD</title>
</head>
<body>
  <input type="text" id="name" placeholder="Аббревиатура">
  <input type="text" id="value" placeholder="Расшифровка">
  <input type="text" id="translate" placeholder="Перевод">
  <button type="button" id="button">СОЗДАТЬ</button>

  <script src="js/jquery-3.7.1.min.js"></script>
</body>
</html>

<style>
  body,html {
    display: flex;
    flex-direction: column;
  }
</style>

<script>
  $("#button").click(() => {
    const name = $("#name").val();
    const value = $("#value").val();
    const translate = $("#translate").val();

    $.ajax({
      url: "api/methodAdd.php?method=forceAdd",
      type: "POST",
      dataType: "json",
      data: {
        name: name,
        value: value,
        translation: translate,
        source: "Ковалёв Кирилл",
        editor: "Ковалёв Кирилл"
      },
      success: function(data) {
        if (data.status === "OK") {
          alert("Добавлено!");
          $("#name").val("");
          $("#value").val("");
          $("#translate").val("");
        } else {
          alert("Ошибка!");
        }
      }
    });
  });
</script>