<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Fake Multithread</title>
</head>
<body>

<script>
for (let i = 0; i < 50; i++) {
    fetch("/job.php?set=" + (i+1)).then(resp => resp.json()).then(result => console.log(result));
}
</script>
</body>
</html>