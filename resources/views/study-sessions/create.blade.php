<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Study Session</title>
</head>
<body>
    <h1>Tambah Study Session</h1>

    <form method="POST" action="/study-sessions">
        @csrf
        
        <div>
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">
        </div>

        <div>
            <label for="duration">Durasi (menit)</label>
            <input type="number" id="duration" name="duration">
        </div>

        <div>
            <label for="studied_at">Tanggal</label>
            <input type="date" id="studied_at" name="studied_at">
        </div>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>