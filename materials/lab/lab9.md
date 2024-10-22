<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab1
Berikut adalah kode HTML lengkap yang dapat digunakan untuk menerjemahkan 10 bahasa daerah utama di Indonesia ke Bahasa Indonesia menggunakan Google Translate API. Aplikasi ini memungkinkan pengguna untuk memilih salah satu dari 10 bahasa daerah, memasukkan teks dalam bahasa daerah tersebut, dan menerjemahkannya ke dalam Bahasa Indonesia.

### Kode HTML Lengkap:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terjemahkan Bahasa Daerah ke Bahasa Indonesia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            resize: vertical;
        }
        select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            cursor: pointer;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Terjemahkan Bahasa Daerah ke Bahasa Indonesia</h1>
    
    <label for="inputText">Masukkan teks dalam Bahasa Daerah:</label>
    <textarea id="inputText" rows="5" placeholder="Masukkan teks di sini..."></textarea>

    <label for="languageSelect">Pilih Bahasa Daerah:</label>
    <select id="languageSelect">
        <option value="jw">Jawa</option>
        <option value="su">Sunda</option>
        <option value="min">Minangkabau</option>
        <option value="bt">Batak</option>
        <option value="bug">Bugis</option>
        <option value="bal">Bali</option>
        <option value="ace">Aceh</option>
        <option value="bew">Betawi</option>
        <option value="mad">Madura</option>
        <option value="bjn">Banjar</option>
    </select>

    <button onclick="translateText()">Terjemahkan</button>

    <h3>Hasil Terjemahan ke Bahasa Indonesia:</h3>
    <textarea id="outputText" rows="5" readonly></textarea>
</div>

<script>
    function translateText() {
        const text = document.getElementById('inputText').value;
        const language = document.getElementById('languageSelect').value;

        if (text.trim() === '') {
            alert('Silakan masukkan teks untuk diterjemahkan.');
            return;
        }

        const apiUrl = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=${language}&tl=id&dt=t&q=${encodeURI(text)}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const translatedText = data[0][0][0];
                document.getElementById('outputText').value = translatedText;
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menerjemahkan.');
            });
    }
</script>

</body>
</html>
```

### Penjelasan Kode:

1. **Input Teks Bahasa Daerah:**
   - Pengguna memasukkan teks dalam bahasa daerah ke dalam `textarea` yang disediakan.

2. **Pilihan Bahasa Daerah:**
   - Pengguna dapat memilih salah satu dari 10 bahasa daerah utama di Indonesia melalui elemen `<select>`. Nilai-nilai yang digunakan (`value`) sesuai dengan kode bahasa daerah:
     - `jw`: Bahasa Jawa
     - `su`: Bahasa Sunda
     - `min`: Bahasa Minangkabau
     - `bt`: Bahasa Batak
     - `bug`: Bahasa Bugis
     - `bal`: Bahasa Bali
     - `ace`: Bahasa Aceh
     - `bew`: Bahasa Betawi
     - `mad`: Bahasa Madura
     - `bjn`: Bahasa Banjar

3. **Tombol Terjemahkan:**
   - Ketika pengguna mengklik tombol "Terjemahkan", fungsi `translateText()` akan dipanggil untuk menerjemahkan teks yang dimasukkan ke dalam Bahasa Indonesia.

4. **Fungsi Terjemahan:**
   - Menggunakan Google Translate API melalui URL:
     ```text
     https://translate.googleapis.com/translate_a/single?client=gtx&sl=<language_code>&tl=id&dt=t&q=<encoded_text>
     ```
   - `sl=<language_code>` adalah kode bahasa sumber yang dipilih pengguna (misalnya `jw` untuk Bahasa Jawa).
   - `tl=id` menunjukkan bahwa hasil terjemahan harus dalam Bahasa Indonesia.
   - Hasil terjemahan ditampilkan di `textarea` di bawahnya.

### Cara Menjalankan:

1. Simpan kode di atas sebagai file HTML, misalnya `terjemahan_bahasa_daerah.html`.
2. Buka file HTML tersebut di browser seperti Google Chrome, Firefox, atau Microsoft Edge.
3. Masukkan teks dalam salah satu bahasa daerah, pilih bahasa tersebut dari dropdown, lalu klik tombol "Terjemahkan".
4. Hasil terjemahan ke dalam Bahasa Indonesia akan muncul di bawahnya.

### Contoh Penggunaan:

- **Input Teks (Bahasa Jawa):** "Sugeng enjing, piyé kabaré?"
- **Hasil Terjemahan (Bahasa Indonesia):** "Selamat pagi, bagaimana kabarnya?"

### Kesimpulan:

Aplikasi ini menyediakan cara interaktif untuk menerjemahkan teks dari 10 bahasa daerah utama di Indonesia ke Bahasa Indonesia menggunakan Google Translate API. Pengguna dapat dengan mudah mengeksplorasi bagaimana sistem terjemahan mesin menangani bahasa lokal di Indonesia.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)




