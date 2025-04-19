class AbbrsCardRender {
  static Card(id, name, value, translation, source, editor) {
    jQuery("#abbrs-card-wrapper").append(`
      <div class="card">
                <div class="values">
                    <div class="abbreviation">
                        <h1 class="name">${String(name).toUpperCase()}</h1>
                        <span class="adult-only"></span>
                    </div>
                    <div class="list">
                        <div class="item">
                            <p class="transcription">${value}</p>
                            <span class="translation">${translation}</span>
                        </div>
                    </div>
                </div>
                <div class="about">
                  <div class="main">
                    <div class="id">
                      <span>#</span>
                      <p class="number">${id}</p>
                    </div>
                    <p class="date">от 17 апреля 2025</p>
                  </div>
                  <div class="names">
                    <div class="suggested">
                      <span class="title">Предложил</span>
                      <p class="text">${source}</p>
                    </div>
                    <div class="redacted">
                      <span class="title">Отредактировал</span>
                      <p class="text">${editor}</p>
                    </div>
                  </div>
                </div>
            </div>
    `);
  }
}

class AbbrsCard {
  constructor() {
    this.id = location.href.split("?id=")[1];
    this.onClassInit();
  }

  onClassInit(api = AbbrsApi, render = AbbrsCardRender) {
    const Abbreviation = AbbrsApi.GetAbbrsById(this.id);
    render.Card(
      Abbreviation.id,
      Abbreviation.name,
      Abbreviation.value,
      Abbreviation.translation,
      Abbreviation.source,
      Abbreviation.editor
    );
  }
}

jQuery(document).ready(() => {
  new AbbrsCard();
});
