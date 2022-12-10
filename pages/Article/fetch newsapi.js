let DATA = {};
const form = document.querySelector('form');
const newsContainer = document.querySelector('#news-container');

async function getData() {
    try {
        const response = await fetch(
            'https://api-berita-indonesia.vercel.app/suara/health'
        );
        let data = await response.json();

        DATA = data;

        for (const article of data.data) {
            newsContainer.innerHTML += templateNews(article);
        }
    } catch (error) {
        console.error(error);
    }
}

form.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();

    let filteredNews = null;
    const inputSearch = event.srcElement[0];

    // console.log(event);
    for (const article of DATA.data) {
        filteredNews = DATA.data.filter((item) => {
            return item.posts.title === inputSearch.value;
        });
    }

    newsContainer.innerHTML = '';
    for (const article of filteredNews) {
        newsContainer.innerHTML += templateNews(article);
    }
});

function templateNews(data) {
    let image = '';
    if (data.posts.thumbnail !== null) {
        image = `<img src="${data.posts.thumbnail}" alt="">`;
    }

    return `
    <div class="col-12 col-md-6 col-lg-3 mt-4" id="news-item">
        <div class="card">
            ${image}
            <a href="${data.posts.link}" class="mt-5">
                <h6>${data.posts.title}</h6>
            </a>
            <p class="article-categories">${data.posts.description}</p>
            <p class="article-time">${data.posts.pubDate}</p>
        </div>
    </div>
    `;
}

getData();
