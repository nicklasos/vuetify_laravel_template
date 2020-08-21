export function responseErrorHandler(err) {
    console.error(err);

    if (err.response && err.response.data) {
        if (err.response.data.errors) {

            let msg = '';

            if (err.response.data.message) {
                msg += err.response.data.message + '\n';
            }

            Object.entries(err.response.data.errors).forEach(([key, values]) => {
                msg += values.join('\n') + '\n';
            });

            alert(msg);

        } else if (err.response.data.message) {
            alert(err.response.data.message);
        } else {
            alert('Server error');
        }
    }
}

export function attachFiles() {
    return new Promise((resolve, reject) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.click();
        input.addEventListener('change', function() {
            if (this.files.length === 0) {
                reject();
                return;
            }
            resolve(this.files);
        });
    });
}
