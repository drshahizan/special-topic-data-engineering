<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Latihan 1: **Pengenalan Terjemahan Mesin untuk Bahasa Indonesia**

## Tujuan
Menerjemahkan kalimat dari Bahasa Indonesia ke Bahasa Inggris menggunakan Google Translate API.
## Persiapan Awal
Sebelum memulai, kita perlu menginstal dan mengimpor beberapa pustaka yang dibutuhkan untuk pemrosesan dan terjemahan menggunakan API seperti `googletrans` (Google Translate API) atau `translate`. 

Jika kamu belum menginstal pustaka `googletrans`, jalankan kode ini terlebih dahulu di Google Colab:

```python
!pip install googletrans==4.0.0-rc1
```
## Kode
Langkah ini menggunakan Google Translate API untuk menerjemahkan kalimat dari bahasa Indonesia ke bahasa Inggris, lalu membandingkan hasilnya.

```python
from googletrans import Translator

# Inisialisasi Translator
translator = Translator()

# Daftar kalimat dalam bahasa Indonesia
kalimat_indonesia = [
    "Selamat pagi, bagaimana kabarmu?",
    "Hari ini cuaca sangat cerah.",
    "Saya sedang belajar pemrograman.",
    "Indonesia adalah negara kepulauan.",
    "Kami akan pergi ke pasar besok."
]

# Terjemahkan setiap kalimat ke bahasa Inggris
hasil_terjemahan = []
for kalimat in kalimat_indonesia:
    terjemahan = translator.translate(kalimat, src='id', dest='en')
    hasil_terjemahan.append(terjemahan.text)

# Cetak hasil terjemahan
for i, kalimat in enumerate(kalimat_indonesia):
    print(f"Kalimat Indonesia: {kalimat}")
    print(f"Terjemahan Mesin (EN): {hasil_terjemahan[i]}\n")
```

## Kode Jawaban: <a href="https://colab.research.google.com/drive/19QSAAtVoCWN5pT2I2FKoKqUTT7XSQJRa?usp=sharing" ><img src="../../images/colab.png" width="36px" height="36px" ></a>



## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)
