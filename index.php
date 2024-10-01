<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Image Display</title>
</head>
<body>
    <script>
       // 检查是否为移动设备
function mobile() {
    const agent = navigator.userAgent;
    const list = ['Windows Phone', 'BlackBerry', 'SymbianOS', 'Android', 'Mobile', 'iPhone', 'iPod'];
    return list.some(device => agent.toLowerCase().includes(device.toLowerCase()));
}

const baseUrl = mobile() ? 'https://tayssj.zeabur.app/' : 'https://taysdn.zeabur.app/';
const url = `${Math.floor(Math.random() * 500) + 1}.webp`;

fetch(baseUrl + url)
    .then(response => response.blob())
    .then(blob => {
        const img = document.createElement('img');
        img.src = URL.createObjectURL(blob);
        document.body.appendChild(img);
    })
    .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
