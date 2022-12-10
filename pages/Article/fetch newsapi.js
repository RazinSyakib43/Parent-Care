let DATA = {};
const form = document.querySelector('form');
const newsContainer = document.querySelector('#news-container');

async function getData() {
    const response = await fetch(
        'https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=fab180adfd804228917c512c4599d0d4'
    );
    const data = await response.json();

    DATA = data;

    for (const article of data.articles) {
        newsContainer.innerHTML += templateNews(article);
    }
}

form.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();

    let filteredNews = null;
    const inputSearch = event.srcElement[0];

    // console.log(event);
    for (const article of DATA.articles) {
        filteredNews = DATA.articles.filter((item) => {
            return item.title === inputSearch.value;
        });
    }

    newsContainer.innerHTML = '';
    for (const article of filteredNews) {
        newsContainer.innerHTML += templateNews(article);
    }
});

function templateNews(data) {
    let image = '';
    if (data.urlToImage !== null) {
        image = `<img src="${data.urlToImage}" alt="">`;
    }

    return `
    <div class="col-12 col-md-6 col-lg-3 mt-4" id="news-item">
        <div class="card">
            ${image}
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
