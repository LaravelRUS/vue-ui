<h2>
    <a href="#password" name="password" class="anchor"></a>
    Password Input
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
            <td colspan="4">
                Все свойства полностью наследуются из <code>&lt;ui-text&gt;</code>
            </td>
        </tr>
        <tr>
            <td><code>tipShow</code></td>
            <td><code>Boolean</code></td>
            <td><code>"Show password"</code></td>
            <td>Тултип с описанием состояния скрытого пароля</td>
        </tr>
        <tr>
            <td><code>tipHide</code></td>
            <td><code>String</code></td>
            <td><code>"Hide password"</code></td>
            <td>Тултип с описанием состояния видимого пароля</td>
        </tr>
        <tr>
            <td><code>tipVisible</code></td>
            <td><code>String</code></td>
            <td><code>"visible"</code></td>
            <td>Суффикс для плейсхоледра, если пароль видимый</td>
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
            <td colspan="2">
                Все события наследуются из <code>&lt;ui-text&gt;</code>
            </td>
        </tr>
        <tr>
            <td><code>@change-visibility</code></td>
            <td>Происходит при смене "видимости" пароля</td>
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
                <code>&lt;ui-password value="password"&gt;</code>
            </td>
            <td>
                <ui-password value="password"></ui-password>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-password value="password"
                    tip-show="Показать пароль"
                    tip-hide="Скрыть пароль"&gt;</code>
            </td>
            <td>
                <ui-password value="password"
                             tip-show="Показать пароль"
                             tip-hide="Скрыть пароль"
                ></ui-password>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-password placeholder="Введите пароль" tip-visible="отображается"&gt;</code>
            </td>
            <td>
                <br />
                <ui-password placeholder="Введите пароль" tip-visible="видно"></ui-password>
            </td>
        </tr>
    </tbody>
</table>
