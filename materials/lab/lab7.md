<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab 7: Menerjemahkan teks dari Bahasa Indonesia ke bahasa lain
Berikut adalah contoh lengkap kode HTML yang bisa digunakan untuk menerjemahkan teks dari Bahasa Indonesia ke bahasa lain menggunakan Google Translate API. Untuk aplikasi web sederhana ini, kita akan menggunakan `googletrans` sebagai backend melalui JavaScript.

Jika Anda menjalankan aplikasi ini di server lokal, Anda dapat menghubungkan backend dengan Google Translate API atau menggunakan library `googletrans` pada backend Python. Namun, untuk contoh sederhana ini, kita akan menggunakan API JavaScript yang memungkinkan pemanggilan langsung.

### Kode HTML Lengkap:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terjemahkan Bahasa Indonesia</title>
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
    <h1>Terjemahkan Bahasa Indonesia</h1>
    
    <label for="inputText">Masukkan teks dalam Bahasa Indonesia:</label>
    <textarea id="inputText" rows="5" placeholder="Masukkan teks di sini..."></textarea>

    <label for="languageSelect">Pilih Bahasa Tujuan:</label>
    <select id="languageSelect">
        <option value="en">Inggris</option>
        <option value="fr">Prancis</option>
        <option value="de">Jerman</option>
        <option value="es">Spanyol</option>
        <option value="jp">Jepang</option>
        <option value="zh">Mandarin</option>
        <option value="ru">Rusia</option>
        <option value="ar">Arab</option>
    </select>

    <button onclick="translateText()">Terjemahkan</button>

    <h3>Hasil Terjemahan:</h3>
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

        const apiUrl = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=id&tl=${language}&dt=t&q=${encodeURI(text)}`;

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
1. **Layout HTML:**
   - Teks masukan ditempatkan dalam elemen `<textarea>` di mana pengguna dapat mengetikkan teks dalam Bahasa Indonesia.
   - Pengguna dapat memilih bahasa tujuan menggunakan elemen `<select>` dengan beberapa opsi bahasa populer seperti Inggris, Prancis, Jerman, Spanyol, dan lainnya.
   - Tombol `Terjemahkan` akan memicu fungsi JavaScript untuk menerjemahkan teks.
   - Teks hasil terjemahan akan ditampilkan dalam elemen `<textarea>` yang ditandai sebagai `readonly`.

2. **Fungsi JavaScript:**
   - Fungsi `translateText()` mengambil teks yang dimasukkan oleh pengguna dan bahasa tujuan.
   - Menggunakan API Google Translate publik yang disediakan oleh Google, teks tersebut diterjemahkan.
   - Hasil terjemahan ditampilkan di dalam `textarea` untuk hasil terjemahan.

3. **Google Translate API:**
   - URL API yang digunakan adalah:
     ```text
     https://translate.googleapis.com/translate_a/single?client=gtx&sl=id&tl=<language_code>&dt=t&q=<encoded_text>
     ```
   - `sl=id` menunjukkan bahwa teks yang dimasukkan berasal dari Bahasa Indonesia (`id` adalah kode untuk Bahasa Indonesia).
   - `tl=<language_code>` adalah kode bahasa tujuan yang diambil dari pilihan pengguna.
   - Hasilnya adalah JSON yang berisi terjemahan teks.

### Cara Menjalankan:
1. Salin kode di atas dan simpan sebagai file `.html`, misalnya `terjemahan.html`.
2. Buka file tersebut di peramban (browser) seperti Google Chrome, Firefox, atau Microsoft Edge.
3. Masukkan teks dalam Bahasa Indonesia, pilih bahasa tujuan, dan klik "Terjemahkan".
4. Hasil terjemahan akan muncul di bawahnya.

### Contoh Penggunaan:
- **Input Teks (Bahasa Indonesia):** "Selamat pagi, bagaimana kabarmu?"
- **Bahasa Tujuan:** Inggris
- **Output (Bahasa Inggris):** "Good morning, how are you?"

## Kode Jawaban: <a href="https://colab.research.google.com/drive/1TENx9x6Zvlbv9tc5_c6sYbJdsc4aqDAc?usp=sharing" ><img src="../../images/colab.png" width="36px" height="36px" ></a>


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)




