<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Confirm</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
    <form class="form" action="/contacts" method="post">
         @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    <div class="th--text">お名前</div>
                </th>
              <td class="confirm-table__text">
                <input type="text" name="last_name'" value="{{ $contact['last_name'] }}" readonly>
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" class="first_name" readonly>
              </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                <div class="th--text">性別</div>
                </th>
              <td class="confirm-table__text">
                <input type="text" name="gender" value="{{ $contact['gender2'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="tel" name="tell" value="{{ implode($contact['tell']) }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="content"  readonly/>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
        <div class="form__button--items">
          <button class="form__button-submit" type="submit">送信</button>
          <a class="form__button-correction" href="route('')">修正</a>
        </div>
        </div>
      </form>
    </div>
  </main>
</body>

</html>