import requests
from bs4 import BeautifulSoup

# URL of the website to scrape
url = "https://example.com/news"

# Send an HTTP GET request
response = requests.get(url)

# Check if the request was successful (status code 200)
if response.status_code == 200:
    # Parse the HTML content using the "lxml" parser
    soup = BeautifulSoup(response.text, "lxml")

    # Locate the HTML elements containing news headlines
    headlines = soup.find_all("h2", class_="news-headline")

    # Extract and print the headlines
    for headline in headlines:
        print(headline.text)
else:
    print("Failed to retrieve the page. Status code:", response.status_code)


    # Import the necessary libraries
from flask import Flask, render_template
import requests
from bs4 import BeautifulSoup

app = Flask(__name__)

@app.route('/')
def index():
    # Your web scraping code here (e.g., fetching news headlines)
    url = "https://example.com/news"
    response = requests.get(url)
    if response.status_code == 200:
        soup = BeautifulSoup(response.text, "lxml")
        headlines = soup.find_all("h2", class_="news-headline")
        news_headlines = [headline.text for headline in headlines]
    else:
        news_headlines = []

    # Render an HTML template and pass the scraped data to it
    return render_template('news.html', news_headlines=news_headlines)

if __name__ == '__main__':
    app.run(debug=True)
