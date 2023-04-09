import requests
from bs4 import BeautifulSoup
import csv

# API endpoint
api_url = "http://api.aladhan.com/v1/calendar/2023/4"

# Request data from API
api_response = requests.get(api_url)

# Parse response JSON
api_data = api_response.json()

# Extract relevant data
prayer_times = []
for day in api_data["data"]:
    prayer_times.append({
        "date": day["date"]["gregorian"]["date"],
        "fajr": day["timings"]["Fajr"],
        "dhuhr": day["timings"]["Dhuhr"],
        "asr": day["timings"]["Asr"],
        "maghrib": day["timings"]["Maghrib"],
        "isha": day["timings"]["Isha"],
    })

# Save data to CSV file
with open("prayer_times.csv", mode="w") as csv_file:
    fieldnames = ["date", "fajr", "dhuhr", "asr", "maghrib", "isha"]
    writer = csv.DictWriter(csv_file, fieldnames=fieldnames)
    writer.writeheader()
    for row in prayer_times:
        writer.writerow(row)