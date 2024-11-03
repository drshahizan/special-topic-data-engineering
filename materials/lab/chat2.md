<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab 1: **Chatbot untuk Penyedia Layanan Cuaca**


## Deskripsi: 
Mengembangkan chatbot yang memberikan informasi cuaca sesuai lokasi pengguna. Chatbot ini mengambil data cuaca dari API, seperti OpenWeatherMap.

## Komponen Utama:
1. Menggunakan API cuaca untuk mendapatkan informasi terbaru berdasarkan input lokasi.
2. Pemprosesan input teks untuk mengenali lokasi dari pengguna.
3. Tujuan Pembelajaran: Mahasiswa mempelajari integrasi API eksternal dan pemrosesan input teks.
4. Implementasi di Google Colab: Integrasi API OpenWeatherMap untuk mendapatkan data cuaca berdasarkan input lokasi dari pengguna.

Untuk menggunakan layanan cuaca, Anda memerlukan **API Key** dari OpenWeatherMap. Berikut kode dasar:

```python
import requests

API_KEY = "your_openweathermap_api_key"  # Ganti dengan API Key Anda
BASE_URL = "http://api.openweathermap.org/data/2.5/weather?"

def chatbot_cuaca(city):
    url = f"{BASE_URL}q={city}&appid={API_KEY}&units=metric"
    response = requests.get(url)
    if response.status_code == 200:
        data = response.json()
        main = data['main']
        temp = main['temp']
        weather = data['weather'][0]['description']
        return f"Cuaca di {city}: {weather} dengan suhu {temp}°C"
    else:
        return "Maaf, saya tidak dapat menemukan data cuaca untuk lokasi tersebut."

# Input pengguna
city = input("Masukkan nama kota: ")
print("Chatbot:", chatbot_cuaca(city))
```

#### Pastikan Anda memiliki API Key yang valid dari OpenWeatherMap.


### View Live Demo 🌐: [Google Colab](https://colab.research.google.com/drive/1Mq0kK_TVKHKdtQiis97wpC4Xjy2dovgP)


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

