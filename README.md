# Саджесты Яндекса для [Альфреда](http://www.alfredapp.com/)

Сделано на основе стандартного примера саджеста для Гугла, заменён источник и поправлено многое другое. Код ужасен, хочется всё переписать на чём-то отличном от пхп, если кто захочет — всегда пожалуйста. Ну и в принципе любые изменения — приветствуются.

Чуть позже тут будет описание того, как можно это поставить и какие фичи, в принципе, есть.

## Install

Самый простой способ установить Саджесты Яндекса для Альфреда — выполнить вот эту команду:

``` sh
curl -O https://codeload.github.com/kizu/yandex-suggest.alfredworkflow/zip/master \
&& unzip master \
&& rm master \
&& zip -r -j yandex-suggest.alfredworkflow yandex-suggest.alfredworkflow-master \
&& rm -rf yandex-suggest.alfredworkflow-master \
&& open yandex-suggest.alfredworkflow
```

Если же вы желаете сделать всё вручную, ну, сделайте всё вручную:

1. Найдите ваши настройки — файл `Alfred.alfredpreferences`. Его легче всего его найти, если у вас Альфред синхронизируется с Яндекс.Диском, Дропбоксом или подобным сервисом — в настройках Альфреда вкладка Advanced, пункт “Syncing”.

2. В контекстном меню по файлу `Alfred.alfredpreferences` выберите “Show Package Contents” и откройте внутреннюю папку `workflows` в терминале.

3. Склонируйте этот репозиторий в эту папку:

        git clone git://github.com/kizu/yandex-suggest.alfredworkflow.git

- - -

Всё, можно начинать пользоваться! Используемые префиксы по умолчанию — `я` или `y`, в русской и английской раскладках соответственно.
