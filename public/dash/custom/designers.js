function initDesignersPage(designers, removeRoute) {
    let designer_form = document.getElementById("desinger_item_form");
    let edit_designer_modal = "#new_desinger_modal";

    $(".designers_list .ed_button").each(function () {
        $(this).click(function () {
            let id = $(this).attr("data-id");
            let { email, full_name } = designers.find(
                ({ id: desId }) => desId == id
            );
            fillForm({ id, email, full_name });
        });
    });

    $(".designers_list .rm_button").each(function () {
        $(this).click(function () {
            let id = $(this).attr("data-id");
            removeDesigner(id);
        });
    });

    async function removeDesigner(designerId) {
        showConfirmDialog(
            "êtes-vous sûr de vouloir supprimer ce dessianteur",
            "danger",
            () => {
                let _token = $('.designers_list input[name="_token"]').val();
                APIFetch(
                    `${removeRoute}/${designerId}`,
                    {
                        method: "delete",
                        body: JSON.stringify({ _token }),
                    },
                    (res) => {
                        if (res.success)
                            setTimeout(() => {
                                window.location.reload();
                            }, 1200);
                        return NotifyResult(res);
                    }
                );
            }
        );
    }

    function openNewModal() {
        fillForm({});
    }

    function fillForm({ id = "-1", email = "", full_name = "" }) {
        $(`${edit_designer_modal} input.id`).attr("value", `${id}`);
        $(`${edit_designer_modal} input.full_name`).attr(
            "value",
            `${full_name}`
        );
        $(`${edit_designer_modal} input.email`).attr("value", `${email}`);

        $(edit_designer_modal).modal();
    }

    $("#new_designer").click(openNewModal);

    designer_form.onsubmit = saveDesigner;

    async function saveDesigner(ev) {
        ev.preventDefault();

        let data = $(designer_form).serializeArray();

        data = formArrayToJson(data);
        console.log(designer_form.action);
        APIFetch(
            designer_form.action,
            {
                method: "POST",
                body: JSON.stringify(data),
            },
            (res) => {
                if (res.success)
                    setTimeout(() => {
                        window.location.reload();
                    }, 1200);
                return NotifyResult(res);
            }
        );
    }
}
