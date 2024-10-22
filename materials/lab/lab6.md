<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab 6: menerjemahkan kalimat dari 10 bahasa daerah utama di Indonesia ke Bahasa Indonesia
Berikut adalah latihan yang dirancang untuk menerjemahkan kalimat dari 10 bahasa daerah utama di Indonesia ke Bahasa Indonesia menggunakan Google Translate API. Latihan ini membantu siswa memahami bagaimana sistem terjemahan mesin menangani bahasa-bahasa daerah yang memiliki karakteristik linguistik yang unik.

## 10 Bahasa Daerah Utama yang Digunakan:
1. **Jawa**
2. **Sunda**
3. **Minangkabau**
4. **Batak**
5. **Bugis**
6. **Bali**
7. **Aceh**
8. **Betawi**
9. **Madura**
10. **Banjar**

## Kode Python Lengkap untuk Latihan:

Berikut adalah kode yang menerjemahkan kalimat dari 10 bahasa daerah ke dalam Bahasa Indonesia.

**Persiapan:**
Pastikan pustaka `googletrans` sudah diinstal. Jika belum, gunakan perintah ini di Google Colab:

```python
!pip install googletrans==4.0.0-rc1
```

**Kode Python:**

```python
from googletrans import Translator

# Inisialisasi Translator
translator = Translator()

# Daftar kalimat dalam 10 bahasa daerah di Indonesia
kalimat_daerah = {
    "Jawa": "Sugeng enjing, piyé kabaré?",  # Jawa
    "Sunda": "Kumaha damang?",  # Sunda
    "Minangkabau": "Apo kaba?",  # Minangkabau
    "Batak": "Horas, bagak do hamu?",  # Batak
    "Bugis": "Iya siaga?",  # Bugis
    "Bali": "Kenken kabare?",  # Bali
    "Aceh": "Peu haba?",  # Aceh
    "Betawi": "Ape kabar?",  # Betawi
    "Madura": "Cabbih, areh kabare?",  # Madura
    "Banjar": "Pian apa kabar?",  # Banjar
}

# Terjemahkan dari bahasa daerah ke Bahasa Indonesia
hasil_terjemahan = {}
for bahasa, kalimat in kalimat_daerah.items():
    terjemahan = translator.translate(kalimat, src='auto', dest='id')
    hasil_terjemahan[bahasa] = terjemahan.text

# Cetak hasil terjemahan
for bahasa, hasil in hasil_terjemahan.items():
    print(f"Kalimat dalam {bahasa}: {kalimat_daerah[bahasa]}")
    print(f"Terjemahan ke Bahasa Indonesia: {hasil}\n")
```

## Penjelasan Kode:
1. **Inisialisasi Translator:**  
   Digunakan pustaka `googletrans` untuk menerjemahkan bahasa daerah secara otomatis.
   
2. **Daftar Kalimat:**  
   Daftar `kalimat_daerah` berisi contoh kalimat sederhana dari 10 bahasa daerah utama di Indonesia.

3. **Terjemahan Otomatis:**  
   Menggunakan fungsi `translate` untuk mendeteksi bahasa secara otomatis dan menerjemahkannya ke Bahasa Indonesia (`dest='id'`).

4. **Output:**  
   Hasil terjemahan dari setiap bahasa daerah ke Bahasa Indonesia dicetak dengan format yang mudah dipahami.

## Contoh Output:

```
Kalimat dalam Jawa: Sugeng enjing, piyé kabaré?
Terjemahan ke Bahasa Indonesia: Selamat pagi, bagaimana kabarnya?

Kalimat dalam Sunda: Kumaha damang?
Terjemahan ke Bahasa Indonesia: Bagaimana kabarnya?

Kalimat dalam Minangkabau: Apo kaba?
Terjemahan ke Bahasa Indonesia: Apa kabar?

Kalimat dalam Batak: Horas, bagak do hamu?
Terjemahan ke Bahasa Indonesia: Horas, bagaimana kabarmu?

Kalimat dalam Bugis: Iya siaga?
Terjemahan ke Bahasa Indonesia: Apa kabar?

Kalimat dalam Bali: Kenken kabare?
Terjemahan ke Bahasa Indonesia: Bagaimana kabarnya?

Kalimat dalam Aceh: Peu haba?
Terjemahan ke Bahasa Indonesia: Apa kabar?

Kalimat dalam Betawi: Ape kabar?
Terjemahan ke Bahasa Indonesia: Apa kabar?

Kalimat dalam Madura: Cabbih, areh kabare?
Terjemahan ke Bahasa Indonesia: Apa kabar?

Kalimat dalam Banjar: Pian apa kabar?
Terjemahan ke Bahasa Indonesia: Apa kabar Anda?
```

## Kode Jawaban: <a href="https://colab.research.google.com/drive/1TENx9x6Zvlbv9tc5_c6sYbJdsc4aqDAc?usp=sharing" ><img src="../../images/colab.png" width="36px" height="36px" ></a>


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)




