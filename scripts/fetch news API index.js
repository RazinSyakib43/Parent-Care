let DATA = null;
const form = document.querySelector('form');
const newsContainer = document.querySelector('#news-container');

async function getData() {
    const fetchData = await fetch(
        'https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=fab180adfd804228917c512c4599d0d4'
    );
    const response = await fetchData.json();

    let count = 0;

    for (const article of response.articles) {
        if (count === 4) {
            break;
        }

        newsContainer.innerHTML += templateNews(article);
        count++;
    }

    DATA = response;
}

function templateNews(data) {
    return `
    <div class="col-12 col-md-6 col-lg-3 mt-4" id="news-item">
        <div class="card">
            <img src="${data.urlToImage}" alt="">
            <a href="${data.url}" class="mt-5">
                <h6>${data.title}</h6>
            </a>
            <p class="article-categories">${data.description}</p>
            <p class="article-time">${data.publishedAt} by ${data.author}</p>
        </div>
    </div>
    `;
}

getData();