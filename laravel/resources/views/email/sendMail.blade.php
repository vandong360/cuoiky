<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<body>
    <h3>Chúc mừng bạn đã đặt sân thành công!</h3>
    <h3>Thông tin đặt sân: </h3>
        <p>Tên sân: {{ $send['tenSan'] }} </p>
        <p>Ngày đặt:  {{ $send['date'] }}</p>
        <p>Khung giờ đặt:  {{ $send['time'] }}</p>
        <p>note:  {{ $send['note'] }}</p>
        <p>Tên Liên hệ:  {{ $send['name'] }}</p>
        <p>Số điện thoại liên hệ:  {{ $send['sdt'] }}</p>
    <h3>Cảm ơn bạn đã đặt sân tại website chúng tôi!</h3>

</body>
</html>