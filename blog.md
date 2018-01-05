---
layout: simple
title: Blog
category: Blog
permalink: /blog/
---

<main>
    <ul class="blog_list">
        {% for blog in site.categories.blog limit:2 %}
            <li>
                <a class="fade_in blog_image_thumb" style="background-image: url('{{blog.image_sm}}')" href="{{site.baseurl}}{{blog.url}}"></a>
                <div class="blog_right_column">
                <h5 class="header_date font_small">{{ blog.date | date: "%B %e, %Y" }}</h5>
                    <a href="{{site.baseurl}}{{blog.url}}">
                        <h4 class="header_title">{{blog.title}}</h4>
                    </a>
                    <p class="blog_description">{{blog.meta}} <a href="{{site.baseurl}}{{blog.url}}">Read More</a></p>
                </div>
            </li>
        {% endfor %}
    </ul>
    {% include footer.html %}
</main>