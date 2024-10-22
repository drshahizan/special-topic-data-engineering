<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab 8: Membandingkan Terjemahan Manual dengan Terjemahan Mesin

**Deskripsi Latihan:**  
Pengguna akan diminta untuk memasukkan teks asli dan hasil terjemahan manual yang mereka buat. Kemudian, sistem akan menggunakan Google Translate API untuk menerjemahkan teks tersebut secara otomatis. Pengguna dapat membandingkan hasil terjemahan manual mereka dengan hasil terjemahan mesin dan menganalisis perbedaan.

## **Kode HTML Lengkap:**

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Terjemahan Manual dan Mesin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
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
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .output {
            margin-top: 20px;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Perbandingan Terjemahan Manual dan Mesin</h1>
    
    <label for="inputText">Teks Asli (Bahasa Indonesia):</label>
    <textarea id="inputText" rows="5" placeholder="Masukkan teks asli di sini..."></textarea>

    <label for="manualTranslation">Terjemahan Manual (Bahasa Inggris):</label>
    <textarea id="manualTranslation" rows="5" placeholder="Masukkan terjemahan manual di sini..."></textarea>

    <label for="languageSelect">Pilih Bahasa Terjemahan Mesin:</label>
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

    <button onclick="translateText()">Bandingkan Terjemahan</button>

    <h3>Hasil Terjemahan Mesin:</h3>
    <textarea id="machineTranslation" rows="5" readonly></textarea>

    <div class="output" id="comparisonResult"></div>
</div>

<script>
    function translateText() {
        const originalText = document.getElementById('inputText').value;
        const manualTranslation = document.getElementById('manualTranslation').value;
        const language = document.getElementById('languageSelect').value;

        if (originalText.trim() === '') {
            alert('Silakan masukkan teks asli untuk diterjemahkan.');
            return;
        }

        const apiUrl = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=id&tl=${language}&dt=t&q=${encodeURI(originalText)}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const machineTranslation = data[0][0][0];
                document.getElementById('machineTranslation').value = machineTranslation;
                compareTranslations(manualTranslation, machineTranslation);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menerjemahkan.');
            });
    }

    function compareTranslations(manualTranslation, machineTranslation) {
        const resultDiv = document.getElementById('comparisonResult');
        if (manualTranslation.trim() === '') {
            resultDiv.innerHTML = '<p style="color:red;">Terjemahan manual belum diisi.</p>';
        } else {
            const manualText = manualTranslation.trim();
            const machineText = machineTranslation.trim();
            let result = '';

            if (manualText === machineText) {
                result = '<p style="color:green;">Hasil terjemahan mesin dan terjemahan manual identik!</p>';
            } else {
                result = '<p style="color:orange;">Ada perbedaan antara terjemahan manual dan terjemahan mesin.</p>';
            }

            resultDiv.innerHTML = result;
        }
    }
</script>

</body>
</html>
```

## Penjelasan Kode:

1. **Input Teks Asli:**  
   Pengguna memasukkan teks dalam Bahasa Indonesia di bagian ini. Bagian ini memungkinkan pengguna untuk mengetik teks yang akan diterjemahkan.

2. **Input Terjemahan Manual:**  
   Pengguna memasukkan terjemahan manual mereka ke dalam bagian ini, sehingga mereka dapat membandingkan hasil terjemahan manual dengan hasil dari sistem terjemahan mesin.

3. **Pilihan Bahasa Tujuan:**  
   Pengguna dapat memilih bahasa tujuan yang berbeda untuk melihat bagaimana hasil terjemahan mesin bekerja dalam berbagai bahasa. Ada beberapa bahasa yang tersedia seperti Inggris, Prancis, Jerman, Spanyol, dan lainnya.

4. **Proses Terjemahan Mesin:**  
   Ketika tombol **"Bandingkan Terjemahan"** ditekan, sistem akan mengirim permintaan ke Google Translate API untuk menerjemahkan teks yang dimasukkan ke dalam bahasa yang dipilih.

5. **Perbandingan Terjemahan:**  
   Setelah hasil terjemahan mesin didapatkan, fungsi `compareTranslations()` akan membandingkan teks terjemahan manual dengan hasil terjemahan mesin. Jika teks identik, pengguna akan diberitahu bahwa hasil terjemahan sama; jika berbeda, pengguna akan diberi tahu bahwa ada perbedaan.

## Cara Menjalankan:

1. Salin kode di atas ke file HTML dan simpan dengan nama seperti `perbandingan_terjemahan.html`.
2. Buka file HTML tersebut di browser untuk mulai menggunakannya.
3. Masukkan teks dalam Bahasa Indonesia dan terjemahan manual, kemudian pilih bahasa tujuan yang diinginkan.
4. Tekan tombol **"Bandingkan Terjemahan"** untuk melihat hasil terjemahan mesin dan analisis perbandingan.

## Tujuan Latihan:

- **Memahami Perbedaan Terjemahan Mesin dan Manual:**  
  Latihan ini membantu pengguna memahami perbedaan antara hasil terjemahan mesin dan terjemahan manual. Hal ini juga dapat memberikan pemahaman lebih lanjut mengenai keterbatasan terjemahan mesin.
  
- **Praktik Menggunakan Google Translate API:**  
  Pengguna dapat mempraktikkan cara menggunakan Google Translate API secara langsung melalui aplikasi ini.

## Contoh Penggunaan:

- **Input Teks Asli (Bahasa Indonesia):** "Selamat pagi, bagaimana kabarmu?"
- **Terjemahan Manual (Bahasa Inggris):** "Good morning, how are you?"
- **Hasil Terjemahan Mesin:** "Good morning, how are you?"
- **Hasil Perbandingan:** "Hasil terjemahan mesin dan terjemahan manual identik!"


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)




