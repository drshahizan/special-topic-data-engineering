<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Latihan 1: **Pengenalan Terjemahan Mesin untuk Bahasa Indonesia**

## Tujuan
Menerjemahkan kalimat dari Bahasa Indonesia ke Bahasa Inggris menggunakan Google Translate API, dan kemudian membandingkan hasil terjemahan mesin dengan terjemahan manual.

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

# Latihan 2: **Analisis Morfologi Bahasa Indonesia**

## Tujuan
Bahasa Indonesia kaya akan morfologi, terutama dengan penggunaan prefiks (awalan), sufiks (akhiran), dan infiks (sisipan) yang memengaruhi makna kata. Latihan ini meneliti bagaimana terjemahan mesin menangani kata-kata berimbuhan.

## Kode
Latihan ini menganalisis bagaimana imbuhan dalam bahasa Indonesia diterjemahkan ke bahasa Inggris.

```python
imbuhan_kata = [
    "mengajar", "berbicara", "menyanyikan", "berlari", "mencintai"
]

# Terjemahkan kata-kata berimbuhan
for kata in imbuhan_kata:
    terjemahan = translator.translate(kata, src='id', dest='en')
    print(f"Kata Indonesia: {kata} -> Terjemahan Mesin (EN): {terjemahan.text}")
```

# Latihan 3: **Penerjemahan Bahasa Daerah di Indonesia**

## Tujuan
Indonesia adalah negara yang memiliki lebih dari 700 bahasa daerah. Sistem terjemahan mesin sering kali kesulitan menerjemahkan bahasa daerah ini ke bahasa Indonesia atau Inggris.

## Kode
Latihan ini melibatkan terjemahan bahasa daerah (misalnya, Bahasa Jawa ke Bahasa Indonesia).

```python
kalimat_jawa = [
    "Sugeng enjing, piyé kabaré?",
    "Aku arep menyang pasar.",
    "Manganan iki enak banget.",
    "Bali menyang omah, ayo."
]

# Terjemahkan dari Bahasa Jawa ke Bahasa Indonesia
for kalimat in kalimat_jawa:
    terjemahan = translator.translate(kalimat, src='jw', dest='id')
    print(f"Kalimat Jawa: {kalimat} -> Terjemahan Mesin (ID): {terjemahan.text}")
```

### Latihan 4: **Terjemahan Kalimat Kompleks**

## Tujuan
Kalimat kompleks, yang terdiri dari banyak klausa atau ide yang saling terkait, sering kali menjadi tantangan bagi sistem terjemahan mesin. Latihan ini menyoroti kemampuan sistem terjemahan mesin dalam menangani struktur kalimat yang lebih rumit.


## Kode
Latihan ini akan mengevaluasi kalimat kompleks.

```python
kalimat_kompleks = [
    "Meskipun hujan deras, kami tetap berangkat ke kantor karena ada rapat penting yang harus dihadiri.",
    "Setelah makan siang, saya akan pergi ke perpustakaan untuk meminjam buku yang sudah lama saya cari.",
    "Jika kamu memiliki waktu luang besok, mari kita pergi ke taman untuk berolahraga."
]

# Terjemahkan kalimat kompleks
for kalimat in kalimat_kompleks:
    terjemahan = translator.translate(kalimat, src='id', dest='en')
    print(f"Kalimat Indonesia: {kalimat} -> Terjemahan Mesin (EN): {terjemahan.text}")
```

# Latihan 5: **Terjemahan Konten Budaya dalam Bahasa Indonesia**
## Tujuan
Peribahasa dan idiom sangat terkait dengan budaya, sehingga sering kali sistem terjemahan mesin gagal menangkap makna sebenarnya. Latihan ini mengeksplorasi bagaimana sistem menangani terjemahan konten yang penuh dengan elemen budaya.

## Kode
Ini adalah latihan terjemahan idiom dan peribahasa.

```python
peribahasa = [
    "Bagai air di daun talas.",
    "Sekali mendayung, dua tiga pulau terlampaui.",
    "Besar pasak daripada tiang.",
    "Tak ada gading yang tak retak."
]

# Terjemahkan peribahasa Indonesia
for idiom in peribahasa:
    terjemahan = translator.translate(idiom, src='id', dest='en')
    print(f"Peribahasa Indonesia: {idiom} -> Terjemahan Mesin (EN): {terjemahan.text}")
```


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)




