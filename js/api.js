class AbbrsApi {
  static ROUTES = {
    getNewAbbrs: "/api/methodGet.php?method=getNew",
    getAbbrsCount: "/api/methodGet.php?method=getCount",
    getAbbrsById: "/api/methodGet.php?method=getById",
  };

  static GetAbbrsById(id, route = AbbrsApi.ROUTES.getAbbrsById) {
    let response;

    jQuery.ajax({
      url: route,
      async: false,
      type: "GET",
      dataType: "json",
      data: {
        id: id,
      },
      success: function (data) {
        response = data;
      },
    });

    return response;
  }

  static GetNewAbbrs(route = AbbrsApi.ROUTES.getNewAbbrs) {
    let response;

    jQuery.ajax({
      url: route,
      async: false,
      type: "GET",
      dataType: "json",
      success: function (data) {
        response = data;
      },
    });

    return response;
  }

  static GetAbbrsCount(route = AbbrsApi.ROUTES.getAbbrsCount) {
    let response;

    jQuery.ajax({
      url: route,
      async: false,
      type: "GET",
      dataType: "json",
      success: function (data) {
        response = data.count;
      },
    });

    return response;
  }
}
