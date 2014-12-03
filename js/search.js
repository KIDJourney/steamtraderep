$(function() {
    view = new View;
    view.listItem();
    $('form').submit(view.submitSearch);
});

View = (function() {
    function View() {
        this.target = $('#info');
    }

    View.prototype.submitSearch = function(e) {
        var text = $('#search-field').val();
        if (text == "") {
            e.preventDefault();
            View.showMassage("噗。。请输入有效字符串");
        }
    }

    View.prototype.listItem = function() {
        if (config.status == 0)
            View.showMassage("啊啊。没有找到相关结果，但也请您谨慎交易哦~");
        else {
            for (var i = 0; i < config.result.length; i++) {
                var item = new Item(config.result[i]);
                this.target.append(item.item);
            }
        }
    }

    View.showMassage = function(t) {
        var box = $('#massage-bar');
        box.text(t);
        box.fadeIn(200, function() {
            setTimeout(function() {
                box.fadeOut(400);
            }, 1000);
        });
    }

    return View;
})();

Item = (function() {
    function Item(data) {
        this.item = $('<li/>');
        this.render(data);
        this.generateLink('.idwei64','http://steamcommunity.com/profiles/');
    }

    Item.prototype.render = function() {
        this.item.addClass('search-item').append(
            $('<span/>').addClass('tiebaid').text(data.tiebaid),
            $('<span/>').addClass('steamid').text(data.steamid),
            $('<span/>').addClass('idwei64').text(data.idwei64),
            $('<span/>').addClass('taobaoid').text(data.taobaoid),
            $('<span/>').addClass('zhifubaomail').text(data.zhifubaomail),
            $('<span/>').addClass('zhifubaoid').text(data.zhifubaoid),
            $('<span/>').addClass('reason').text(data.reason)
        );

        if (this.data.tiebaid == "KIDJourney")
            this.item.attr('id', 'KIDJourney');
    }

    Item.prototype.generateLink = function(css_class, url_pattern) {
        var span = this.item.children(css_class)
        var idstring = span.text();
        var ids = idstring.split(' ');

        span.empty();
        for (var i = 0; i < ids.length; i++) {
            var url = url_pattern + ids[i];
            span.append('<a href="' + url + '">' + ids[i] + '</a>');
        }
    }

    return Item;
})();