<h1>Search results:</h1>
<section>
    {foreach from=$result item=newsItem}

    <article>
        <h1>{$newsItem.title}</h1>
        <content>{$newsItem.content}</content>
    </article>

    {/foreach}
</section>
