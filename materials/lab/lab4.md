<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Latihan 4: **Terjemahan Kalimat Kompleks**

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

## Kode Jawaban: <a href="https://colab.research.google.com/drive/1HfhHhGSbxL1ftk6GCSFj5yPaHLHLiCmG?usp=sharing" ><img src="../../images/colab.png" width="36px" height="36px" ></a>

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)
