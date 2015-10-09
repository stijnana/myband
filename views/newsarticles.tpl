
<div id="inhoud" >

    <div class="col-sm-6">

        {include file = 'zoek.tpl'}
        <section>
            {foreach from=$data item=newsItem}

                <article>
                    <h1>{$newsItem.id} {$newsItem.title}</h1>
                    <content>{$newsItem.content}</content>
                </article>

            {/foreach}
            {include file = 'pagen.tpl'}

        </section>
    </div>
    <div class="col-sm-6">
        <img src="img/bn.png" width="60%"  id="banner" alt="">
    </div>