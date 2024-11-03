<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab 2: **Chatbot FAQ untuk Layanan Pelanggan**

   - **Deskripsi**: Bangun chatbot yang dapat menjawab pertanyaan umum (FAQ) untuk layanan pelanggan. Chatbot ini akan dilatih menggunakan dataset FAQ yang berisi pertanyaan dan jawaban yang sering ditanyakan.
   - **Komponen Utama**: 
     - Menggunakan **Natural Language Toolkit (NLTK)** atau **spaCy** untuk pemrosesan teks.
     - **Algoritma pencocokan kesamaan** untuk membandingkan pertanyaan pengguna dengan data FAQ.
   - **Tujuan Pembelajaran**: Mahasiswa belajar tentang NLP dasar, ekstraksi entitas, dan algoritma kesamaan teks.
   - **Implementasi di Google Colab**: Integrasi dataset FAQ sebagai CSV, lalu menerapkan kode Python untuk melakukan pre-processing dan pencocokan teks.

Pada contoh ini, chatbot menggunakan **TF-IDF** dan **cosine similarity** untuk menemukan jawaban FAQ terbaik berdasarkan masukan pengguna.

```python
import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

# Data FAQ
data = {
    'pertanyaan': [
        "Apa jam operasional?",
        "Bagaimana cara menghubungi layanan pelanggan?",
        "Apakah produk ini memiliki garansi?",
        "Bagaimana cara melacak pesanan saya?",
        "Apa metode pembayaran yang tersedia?"
    ],
    'jawaban': [
        "Jam operasional kami dari pukul 8 pagi hingga 8 malam.",
        "Anda bisa menghubungi kami melalui email atau telepon.",
        "Ya, kami menyediakan garansi satu tahun.",
        "Anda dapat melacak pesanan Anda di halaman 'Status Pesanan'.",
        "Kami menerima kartu kredit, debit, dan pembayaran digital."
    ]
}

faq_df = pd.DataFrame(data)

# Preprocessing
vectorizer = TfidfVectorizer()
faq_vectors = vectorizer.fit_transform(faq_df['pertanyaan'])

def chatbot_faq(user_question):
    question_vec = vectorizer.transform([user_question])
    similarities = cosine_similarity(question_vec, faq_vectors).flatten()
    idx = similarities.argmax()
    if similarities[idx] > 0.3:  # threshold untuk relevansi
        return faq_df['jawaban'].iloc[idx]
    else:
        return "Maaf, saya tidak dapat memahami pertanyaan Anda."

# Input pengguna
user_question = input("Tanyakan sesuatu: ")
print("Chatbot:", chatbot_faq(user_question))
```


### View Live Demo 🌐: [Google Colab](https://colab.research.google.com/drive/1ht4bNNvZdYEG9Xa1gxQoE_8ut5sLN4Kw#scrollTo=s-m_cLV69ZD_)


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)
