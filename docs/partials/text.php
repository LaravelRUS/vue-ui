<h2>
    <a href="#input" name="input" class="anchor"></a>
    Input
</h2>

<h3>Свойства</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Тип</td>
            <td>Значение по умолчанию</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>disabled</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Отключаем кнопку/ссылку</td>
        </tr>
        <tr>
            <td><code>loading</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Показывать индикатор загрузки</td>
        </tr>
        <tr>
            <td><code>title</code></td>
            <td><code>String</code></td>
            <td><code>null</code></td>
            <td>Текст тултипа</td>
        </tr>
        <tr>
            <td><code>placeholder</code></td>
            <td><code>String</code></td>
            <td><code>null</code></td>
            <td>Описание поля</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td><code>String</code></td>
            <td><code>""</code></td>
            <td>Имя компонента</td>
        </tr>
        <tr>
            <td><code>value</code></td>
            <td><code>String</code></td>
            <td><code>""</code></td>
            <td>Значение компонента</td>
        </tr>
        <tr>
            <td><code>type</code></td>
            <td>
                Одно из:
                <ul>
                    <li><code>"text"</code></li>
                    <li><code>"email"</code></li>
                    <li><code>"tel"</code></li>
                    <li><code>"url"</code></li>
                    <li><code>"search"</code></li>
                </ul>
            </td>
            <td><code>"text"</code></td>
            <td>Тип текстового поля</td>
        </tr>
    </tbody>
</table>

<h3>События</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>@input</code></td>
            <td>Происходит при нажатии измении значения текстового поля</td>
        </tr>
        <tr>
            <td><code>@focus</code></td>
            <td>Происходит при получении фокуса</td>
        </tr>
        <tr>
            <td><code>@blur</code></td>
            <td>Происходит при сбросе фокуса</td>
        </tr>
    </tbody>
</table>

<h3>Примеры</h3>

<table>
    <thead>
        <tr>
            <td>Тип</td>
            <td>Пример</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <code>&lt;ui-text value="Example"&gt;</code>
            </td>
            <td>
                <ui-text value="Example"></ui-text>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-text title="Hover me" placeholder="Write here something..."&gt;</code>
            </td>
            <td>
                <br/>
                <ui-text title="Hover me" placeholder="Write here something..."></ui-text>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-text :disabled="true"&gt;</code>
            </td>
            <td>
                <ui-text :disabled="true" value="Disabled"></ui-text>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-text :loading="true"&gt;</code>
            </td>
            <td>
                <ui-text :loading="true" value="Loading..."></ui-text>
            </td>
        </tr>
    </tbody>
</table>
