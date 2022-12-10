let DATA = {};
const form = document.querySelector('form');
const newsContainer = document.querySelector('#news-container');

async function getData() {

    try {
        const response = await fetch(
            'https://api-berita-indonesia.vercel.app/suara/health'
        );
        DATA = await response.json();

        console.log('DATA API nya', DATA);
        if (newsContainer === null) {
            console.error('HTML element with id "news-container" not found!');
            return;
        }

        const DATAArray = Array.from(DATA.data);

        for (const article of DATAArray) {
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
    for (const article of DATAArray) {
        filteredNews = DATAArray.filter((item) => {
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
    if (DATA.data.posts.thumbnail !== null) {
        image = `<img src="${DATA.data.posts.thumbnail}" alt="">`;
    }

    return `
    <div class="col-12 col-md-6 col-lg-3 mt-4" id="news-item">
        <div class="card">
            ${image}
            <a href="${DATA.data.posts.link}" class="mt-5">
                <h6>${DATA.data.posts.title}</h6>
            </a>
            <p class="article-categories">${DATA.data.posts.description}</p>
            <p class="article-time">${DATA.data.posts.pubDate}</p>
        </div>
    </div>
    `;
}

getData();
