---
layout: page
title: Blog Test
category: Blog
permalink: /blog/
---

<main>
    <ul class="blog_list">
        {% for blog in site.categories.blog limit:2 %}
            <li>
                <a href="{{site.baseurl}}{{blog.url}}">
                    <h4 class="violet_text">{{blog.title}}</h4>
                </a>
                <h5 class="blog_date">Posted on {{ blog.date | date: "%B %e, %Y" }}</h5>
                <a class="blog_image_sm" href="{{site.baseurl}}{{blog.url}}">
                    <img src="{{blog.image_sm}}" class="fade_in">
                </a>
                <br>
                <p>{{blog.meta}}</p>
                <a href="{{site.baseurl}}{{blog.url}}">Read More</a>
                <br>
            </li>
        {% endfor %}
    </ul>
    {% include footer.html %}
</main>